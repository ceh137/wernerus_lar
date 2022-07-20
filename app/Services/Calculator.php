<?php

namespace App\Services;

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
                    $type = 11;
                }

                $sender =  Customer::create(
                    [
                    'name' => $data['payments']['sender']['name'],
                    'email' => $data['payments']['sender']['email'],
                    'telnum' => $data['payments']['sender']['tel'],
                ]);

                if ($data['payments']['sender']['INN'] != '') {
                    $sender_comp = Company::updateOrCreate([
                        'INN' => $data['payments']['sender']['INN'],
                    ],[
                        'INN' => $data['payments']['sender']['INN'],
                        'name' => $data['payments']['sender']['company'],
                    ]);
                    $sender->company_id = $sender_comp->id;
                    $sender->save();
                }

                $receiver = Customer::create([
                    'name' => $data['payments']['receiver']['name'],
                    'email' => $data['payments']['receiver']['email'],
                    'telnum' => $data['payments']['receiver']['tel'],
                ]);
                if ($data['payments']['receiver']['INN'] != '') {
                    $receiver_comp = Company::updateOrCreate([
                        'INN' => $data['payments']['receiver']['INN'],
                    ],[
                        'INN' => $data['payments']['receiver']['INN'],
                        'name' => $data['payments']['receiver']['company'],
                    ]);
                    $receiver->company_id = $receiver_comp->id;
                    $receiver->save();
                }


                if ($data['payments']['third_party']['name']) {
                    $third_party = Customer::create([
                        'name' => $data['payments']['third_party']['name'],
                        'email' => $data['payments']['third_party']['email'],
                        'telnum' => $data['payments']['third_party']['tel'],
                    ]);
                    if ($data['payments']['third_party']['INN'] != '') {
                        $third_party_comp = Company::updateOrCreate([
                            'INN' => $data['payments']['third_party']['INN'],
                        ],[
                            'INN' => $data['payments']['third_party']['INN'],
                            'name' => $data['payments']['third_party']['company'],
                        ]);
                        $third_party->company_id = $third_party_comp->id;
                        $third_party->save();
                    }
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
                    $method = 1;
                } else {
                    $method = 2;
                }

                $order = [
                    'method_id' => $method,
                    'route_id' => $route_id,
                    'delivery_type' => $delivery_type,
                    'del_from_addr_time_from' => $data['from_time_from_addr'],
                    'del_from_addr_time_to' => $data['to_time_from_addr'],
                    'del_to_addr_time_from' => $data['from_time_to_addr'],
                    'del_to_addr_time_to' => $data['to_time_to_addr'],
                    'date_del_to_addr' => $data['date_to'],
                    'date_del_from_addr' => $data['date_from'],
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
                    'tp_id' => $third_party->id ?? null,
                    'sender_company_id' => $sender_comp->id,
                    'receiver_company_id' => $receiver_comp->id,
                    'tp_company_id' => $third_party_comp->id ?? null,
                    'order_price_id' => $order_prices->id,
                    'who_pays_id' => $who_pays->id,
                    'comment' => $data['comment'],
                    'filled_at_terminal' => false,
                    'status_id' => 1,
                    'files_id' => $files->id,
                    'address_to' => $data['addressTo'],
                    'address_from'=> $data['addressFrom'],
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

    public function update($id, $data) {
        DB::beginTransaction();
        try {
            $order = Order::find($id);

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

            $order_prices =  OrderPrice::find($order->order_price_id)->update($prices);


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

            $sender =  Customer::find($order->sender_id);
            $sender->update([
                'name' => $data['payments']['sender']['name'],
                'email' => $data['payments']['sender']['email'],
                'telnum' => $data['payments']['sender']['tel'],
            ]);

            if ($data['payments']['sender']['INN'] != '') {
                $sender_comp = Company::find($order->sender_company_id);
                $sender_comp->update([
                    'INN' => $data['payments']['sender']['INN'],
                    'name' => $data['payments']['sender']['company'],
                ]);
                $sender->company_id = $sender_comp->id;
                $sender->save();
            }

            $receiver = Customer::find($order->receiver_id);
            $receiver->update([
                'name' => $data['payments']['receiver']['name'],
                'email' => $data['payments']['receiver']['email'],
                'telnum' => $data['payments']['receiver']['tel'],
            ]);
            if ($data['payments']['receiver']['INN'] != '') {
                $receiver_comp = Company::find($order->receiver_company_id);
                $receiver_comp->update([
                    'INN' => $data['payments']['receiver']['INN'],
                    'name' => $data['payments']['receiver']['company'],
                ]);
                $receiver->company_id = $receiver_comp->id;
                $receiver->save();
            }

            if ($data['payments']['third_party']['name'] != '') {
                $third_party = Customer::find($order->tp_id);
                $third_party->update([
                    'name' => $data['payments']['third_party']['name'],
                    'email' => $data['payments']['third_party']['email'],
                    'telnum' => $data['payments']['third_party']['tel'],
                ]);
                if ($data['payments']['third_party']['INN'] != '') {
                    $third_party_comp = Company::find($order->tp_company_id);
                    $third_party_comp->update([
                        'INN' => $data['payments']['third_party']['INN'],
                        'name' => $data['payments']['third_party']['company'],
                    ]);
                    $third_party->company_id = $third_party_comp->id;
                    $third_party->save();
                }
            }



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
                    $res[$v] = $order->sender->id;
                } elseif ($data['payments']['receiver'][$v]) {
                    $res[$v] = $order->receiver->id;
                } elseif ($data['payments']['third_party'][$v]) {
                    $res[$v] = $order->tp->id;
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

            WhoPays::find($order->who_pays_id)->update($payments);


            if ($data['express']) {
                $method = 1;
            } else {
                $method = 2;
            }

            $order_info = [
                'method_id' => $method,
                'route_id' => $route_id,
                'del_from_addr_time_from' => $data['from_time_from_addr'],
                'del_from_addr_time_to' => $data['to_time_from_addr'],
                'del_to_addr_time_from' => $data['from_time_to_addr'],
                'del_to_addr_time_to' => $data['to_time_to_addr'],
                'date_del_to_addr' => $data['date_to'],
                'date_del_from_addr' => $data['date_from'],
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
                'comment' => $data['comment'],
                'filled_at_terminal' => false,
                'status_id' => 1,
                'address_to' => $data['addressTo'],
                'address_from'=> $data['addressFrom'],
            ];

            $order->update($order_info);
            DB::commit();
            return $order->id;

        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }


}
