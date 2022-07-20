<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Customer;
use App\Models\File;
use App\Models\Order;
use App\Models\OrderPrice;
use App\Models\Route;
use App\Models\Type;
use App\Models\User;
use App\Models\WhoPays;
use App\Services\GoogleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function index() {
        $gog = new GoogleService();
        $data_full =  $gog->readGoogleSheet();

//        echo '<pre>'; var_dump($data[0]); echo '</pre>';

        foreach ($data_full as $data) {
            if ($data === $data_full[0]) {
                continue;
            } elseif ($data[2] == '') {
                continue;
            }

            DB::beginTransaction();
            try {
                $from_c_id = City::where('name', $data[2])->first()->id;
                $to_c_id = City::where('name', $data[3])->first()->id;

                $route_id = Route::where(['to_city_id' => $to_c_id, 'from_city_id' => $from_c_id])->first()->id;

                $pac_price = 0;
                $pac_price += $data[20] != '' && $data[20] != 0 ? intval($data[20]) : 0;
                $pac_price +=  $data[21] != '' && $data[21] != 0 ? intval($data[21]) : 0;
                $pac_price +=  $data[22] != '' && $data[22] != 0 ? intval($data[22]) : 0;

                $prices = [
                    'TT_price' =>  $data[17] != '' && $data[17] != '0' ? intval($data[17]) : 0,
                    'to_addr_price' => $data[18] != '' && $data[18] != '0' ? intval($data[18]) : 0,
                    'from_addr_price' => $data[19] != '' && $data[19] != '0' ? intval($data[19]) : 0,
                    'pac_price' => (($data[20] != '' && $data[20] != '0') || ($data[21] != '' && $data[21] != '0') || ($data[22] != '' && $data[22] != '0')) ? $pac_price : 0,
                    'insurance_price' => $data[23] != '' && $data[23] != '0' ? intval($data[23]) : 0,
                    'prr_to_addr_price' =>  $data[25] != '' && $data[25] != '0' ? intval($data[25]) : 0,
                    'prr_from_addr_price' => $data[24] != '' && $data[24] != '0' ? intval($data[24]) : 0,
                    'total' =>  $data[47] ? intval($data[47]) : 0,
                ];

                $order_prices = new OrderPrice($prices);
                $order_prices->save();

                $delivery_type = 'TT';
                if ($data[19] && !$data[18]) {
                    $delivery_type = 'AT';
                } elseif ($data[19] && $data[18]) {
                    $delivery_type = 'AA';
                } elseif (!$data[19] && $data[18]) {
                    $delivery_type = 'TA';
                }

                try {
                    $type = Type::where('name', '=', $data[52])->first()->id;
                } catch (\Exception $e) {
                    $type = 11;
                }

                $sender =  Customer::create(
                    [
                        'name' => $data[28],
                        'email' => $data[30],
                        'telnum' => $data[29],
                    ]);

                if ($data[27] != '') {
                    $sender_comp = Company::updateOrCreate([
                        'INN' => $data[27],
                    ],[
                        'INN' => $data[27],
                        'name' => $data[48],
                    ]);
                    $sender->company_id = $sender_comp->id;
                    $sender->save();
                }

                $receiver = Customer::create([
                    'name' => $data[32],
                    'email' => $data[34],
                    'telnum' => $data[33],
                    'is_phys' => $data[31] == '',
                    'role_id' => 1
                ]);
                if ($data[31] != '') {
                    $receiver_comp = Company::updateOrCreate([
                        'INN' => $data[31],
                    ],[
                        'INN' => $data[31],
                        'name' => $data[49],
                    ]);
                    $receiver->company_id = $receiver_comp->id;
                    $receiver->save();
                }


                if ($data[36]) {
                    $third_party = Customer::create([
                        'name' => $data[36],
                        'email' => $data[38],
                        'telnum' => $data[37],
                    ]);
                    if ($data[35] != '') {
                        $third_party_comp = Company::updateOrCreate([
                            'INN' => $data[35],
                        ],[
                            'INN' => $data[35],
                            'name' => $data[50],
                        ]);
                        $third_party->company_id = $third_party_comp->id;
                        $third_party->save();
                    }
                }


                $files = new File();
                $files->save();
                $res = [];

                $p = [
                    39 => 'pay_all',
                    40 => 'pay_TT',
                    41 =>  'pay_del_to_addr',
                    42 => 'pay_del_from_addr',
                    43 => 'pay_pac',
                    44 => 'pay_ins',
                    45 => 'pay_PRR_from_addr',
                    46 => 'pay_PRR_to_addr',
                ];

                foreach ($p as $k=>$v) {
                    if ($data[$k] == 'Отправитель') {
                        $res[$v] = $sender->id;
                    } elseif ($data[$k] == 'Получатель') {
                        $res[$v] = $receiver->id;
                    } elseif ($data[$k] == '3e-лицо') {
                        $res[$v] = $third_party->id;
                    } else {
                        $res[$v] = null;
                    }
                }

                $payments = [
                    "TT" => $res['pay_TT'],
                    'to_addr' => $res['pay_del_to_addr'],
                    'from_addr' => $res['pay_del_from_addr'],
                    'package' => $res['pay_pac'],
                    'insurance' => $res['pay_ins'],
                    'prr_to_addr' => $res['pay_PRR_to_addr'],
                    'prr_from_addr' => $res['pay_PRR_from_addr'],
                    'total' => $res['pay_all']
                ];

                $who_pays = new WhoPays($payments);
                $who_pays->save();

                if ($data[1] == 'ЭКОНОМ') {
                    $method = 2;
                } elseif ($data[1] == 'ЭКСПРЕСС') {
                    $method =  1 ;
                }

              $order = [
                    'method_id' => $method,
                    'route_id' => $route_id,
                    'delivery_type' => $delivery_type,
                    'del_from_addr_time_from' => $data[8],
                    'del_from_addr_time_to' => $data[9],
                    'del_to_addr_time_from' => $data[10],
                    'del_to_addr_time_to' => $data[11],
                    'date_del_to_addr' => $data[7],
                    'date_del_from_addr' => $data[6],
                    'weight' => toFloat($data[12]),
                    'volume' => toFloat($data[13]),
                    'pieces' => toFloat($data[14]),
                    'heaviest' => toFloat($data[15]),
                    'longest' => toFloat($data[16]),
                    'worth' => toFloat($data[26]),
                    'to_addr' => $data[18] != '',
                    'from_addr' => $data[19] != '',
                    'rig_pac' => $data[20] != '',
                    'stretch_pac' => $data[21] != '',
                    'bort_pac' => $data[22] != '',
                    'insurance' => $data[23] != '',
                    'prr_to_addr' => $data[25] != '',
                    'prr_from_addr' => $data[24] != '',
                    'type_id' => $type,
                    'sender_id' => $sender->id,
                    'receiver_id' => $receiver->id,
                    'tp_id' => $third_party->id ?? null,
                    'sender_company_id' => $sender_comp->id,
                    'receiver_company_id' => $receiver_comp->id,
                    'tp_company_id' => $third_party_comp->id ?? null,
                    'order_price_id' => $order_prices->id,
                    'who_pays_id' => $who_pays->id,
                    'comment' => $data[51],
                    'filled_at_terminal' => false,
                    'status_id' => 1,
                    'files_id' => $files->id,
                    'address_to' => $data[5],
                    'address_from'=> $data[4],
                    'created_at'  => $data[0],
                  'updated_at' => $data[0]
                ];

                $norder = new Order($order);
                $norder->save();
                DB::commit();
//                return $norder->id;

            } catch (\Exception $e) {
                DB::rollBack();
                return $e->getMessage();
            }


        }

    }
}
