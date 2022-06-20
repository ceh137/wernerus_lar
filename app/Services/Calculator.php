<?php

namespace App\Services;

use App\Models\City;
use App\Models\Company;
use App\Models\File;
use App\Models\Order;
use App\Models\OrderPrice;
use App\Models\Route;
use App\Models\Type;
use App\Models\User;
use App\Models\WhoPays;
use Illuminate\Support\Facades\DB;

class Calculator
{
    public function save($data) {
        DB::beginTransaction();
        try {
                $from_c_id = City::where('code', $data['selected_from_city'])->first()->id;
                $to_c_id = City::where('code', $data['selected_to_city'])->first()->id;

                $route_id = Route::where(['to_city_id' => $to_c_id, 'from_city_id' => $from_c_id])->first()->id;

                $pac_price = 0;
                $pac_price += $data['rig_pac'] ? $data['rig_pac_price'] : 0;
                $pac_price += $data['stretch_pac'] ? $data['stretch_pac_price'] : 0;
                $pac_price += $data['bort_pac'] ? $data['bort_pac_price'] : 0;

                $prices = [
                    'TT_price' =>  $data['TT_price'] ?? 0,
                    'to_addr_price' => $data['with_addr_to'] ? $data['to_addr_price'] : 0,
                    'from_addr_price' => $data['with_addr_from'] ? $data['from_addr_price'] : 0,
                    'pac_price' => ($data['rig_pac'] || $data['stretch_pac'] || $data['bort_pac']) ? $pac_price : 0,
                    'insurance_price' => $data['insurance'] ? $data['insurance_price'] : 0,
                    'prr_to_addr_price' =>  $data['PRR_to_addr'] ? $data['PRR_to_addr_price'] : 0,
                    'prr_from_addr_price' => $data['PRR_from_addr'] ? $data['PRR_from_addr_price'] : 0,
                    'total' =>  $data['total'] ?? 0
                ];

                $order_prices = new OrderPrice($prices);
                $order_prices->save();

                $delivery_type = 'TT';
                if ($data['with_addr_from'] && !$data['with_addr_to']) {
                    $delivery_type = 'AT';
                } elseif ($data['with_addr_from'] && $data['with_addr_to']) {
                    $delivery_type = 'AA';
                } elseif (!$data['with_addr_from'] && $data['with_addr_to']) {
                    $delivery_type = 'TA';
                }

                try {
                    $type = Type::where('name', '=', $data['cargo_type'])->first()->id;
                } catch (\Exception $e) {
                    $type = 1;
                }

                $sender =  User::firstOrCreate([
                    'name' => $data['payments']['sender']['name'],
                    'email' => $data['payments']['sender']['email'],
                    'telnum' => $data['payments']['sender']['tel'],
                    'is_phys' => $data['payments']['sender']['INN'] == '',
                    'role_id' => 1
                ]);

                if ($data['payments']['sender']['INN'] != '') {
                    $sender_comp = Company::firstOrCreate([
                        'INN' => $data['payments']['sender']['INN'],
                        'name' => $data['payments']['sender']['company'],
                    ]);
                }

                $receiver = User::firstOrCreate([
                    'name' => $data['payments']['receiver']['name'],
                    'email' => $data['payments']['receiver']['email'],
                    'telnum' => $data['payments']['receiver']['tel'],
                    'is_phys' => $data['payments']['receiver']['INN'] == '',
                    'role_id' => 1
                ]);
                if ($data['payments']['receiver']['INN'] != '') {
                    $receiver_comp = Company::firstOrCreate([
                        'INN' => $data['payments']['receiver']['INN'],
                        'name' => $data['payments']['receiver']['company'],
                    ]);
                }

                $third_party = User::firstOrCreate([
                    'name' => $data['payments']['third_party']['name'],
                    'email' => $data['payments']['third_party']['email'],
                    'telnum' => $data['payments']['third_party']['tel'],
                    'is_phys' => $data['payments']['third_party']['INN'] == '',
                    'role_id' => 1
                ]);
                if ($data['payments']['third_party']['INN'] != '') {
                    $third_party_comp = Company::firstOrCreate([
                        'INN' => $data['payments']['third_party']['INN'],
                        'name' => $data['payments']['third_party']['company'],
                    ]);
                }

                $files = new File();
                $files->save();

                $p = [
                    'pay_TT',
                    'pay_PRR_from_addr',
                    'pay_PRR_to_addr',
                    'pay_del_from_addr',
                    'pay_del_to_addr',
                    'pay_all',
                    'pay_ins',
                    'pay_pac',
                ];
                $res = [];
                foreach ($p as $v) {
                    if ($data['payments']['sender'][$v]) {
                        $res[$v] = $sender->id;
                    } elseif ($data['payments']['receiver'][$v]) {
                        $res[$v] = $receiver->id;
                    } elseif ($data['payments']['third_party'][$v]) {
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

                if ($data['express']) {
                    $method = 2;
                } else {
                    $method = 3;
                }

                $order = [
                    'method_id' => $method,
                    'route_id' => $route_id,
                    'delivery_type' => $delivery_type,
                    'weight' => $data['kg'],
                    'volume' => $data['meters'],
                    'pieces' => $data['pieces'],
                    'heaviest' => $data['heaviest'],
                    'longest' => $data['longest'],
                    'worth' => $data['worth'],
                    'to_addr' => $data['with_addr_to'],
                    'from_addr' => $data['with_addr_from'],
                    'rig_pac' => $data['rig_pac'],
                    'stretch_pac' => $data['stretch_pac'],
                    'bort_pac' => $data['bort_pac'],
                    'insurance' => $data['insurance'],
                    'prr_to_addr' => $data['PRR_to_addr'],
                    'prr_from_addr' => $data['PRR_from_addr'],
                    'type_id' => $type,
                    'sender_id' => $sender->id,
                    'receiver_id' => $receiver->id,
                    'tp_id' => $third_party->id,
                    'sender_company_id' => $sender_comp->id,
                    'receiver_company_id' => $receiver_comp->id,
                    'tp_company_id' => $third_party_comp->id,
                    'order_price_id' => $order_prices->id,
                    'who_pays_id' => $who_pays->id,
                    'comment' => $data['comment'],
                    'filled_at_terminal' => false,
                    'status_id' => 1,
                    'files_id' => $files->id
                ];

                $norder = new Order($order);
                $norder->save();
                DB::commit();
                return $norder->id;

        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }


    }
}
