<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Order;
use App\Models\OrderPrice;
use App\Models\WhoPays;
use App\Services\Calculator;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.applications');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $order = Order::with(['route' => function ($q) {
            $q->with(['city_to', 'city_from']);
        }])
            ->with(['sender', 'receiver', 'tp', 'sender_comp', 'receiver_comp', 'tp_comp', 'cargo_type', 'who_pays', 'method'])
            ->find($id);
        $data = [];
        $people = ['sender' => 'sender', 'receiver' => 'receiver', 'third_party' => 'tp'];
        $comps = ['sender' =>'sender_comp', 'receiver' =>'receiver_comp','third_party' => 'tp_comp'];
        try {
            foreach ($people as $k=>$v) {
                if (!is_null($order->{$comps[$k]}) && !is_null($order->{$v}) && !is_null($order->{$v.'_id'}) && !is_null($order->{$comps[$k].'any_id'})) {
                    $data['payments'][$k] = [
                        'INN' => $order->{$comps[$k]}->INN ?? '',
                        'company' => $order->{$comps[$k]}->name ?? '',
                        'name' => $order->{$v}->name ?? '',
                        'tel' => $order->{$v}->telnum,
                        'email' => $order->{$v}->email,
                        'pay_all' => $order->who_pays->total == $order->{$v}->id ?? false,
                        'pay_TT' => $order->who_pays->TT == $order->{$v}->id ?? false,
                        'pay_pac' => $order->who_pays->package == $order->{$v}->id ?? false,
                        'pay_ins' => $order->who_pays->insurance == $order->{$v}->id ?? false,
                        'pay_del_to_addr' => $order->who_pays->to_addr == $order->{$v}->id ?? false,
                        'pay_del_from_addr' => $order->who_pays->from_addr == $order->{$v}->id ?? false,
                        'pay_PRR_to_addr' => $order->who_pays->prr_to_addr == $order->{$v}->id ?? false,
                        'pay_PRR_from_addr' => $order->who_pays->prr_from_addr == $order->{$v}->id ?? false,
                        'subtotal' => 0
                    ];

                    foreach ($data['payments'][$k] as $key => $val) {
                        if ($val == null) {
                            $data['payments'][$k][$key] = '';
                        }
                    }
                } else {
                    if (!is_null($order->{$v}) && !is_null($order->{$v.'_id'})) {
                        $data['payments'][$k] = [
                            'INN' => '',
                            'company' => '',
                            'name' => $order->{$v}->name,
                            'tel' => $order->{$v}->telnum,
                            'email' => $order->{$v}->email,
                            'pay_all' => $order->who_pays->total == $order->{$v}->id ?? false,
                            'pay_TT' => $order->who_pays->TT == $order->{$v}->id ?? false,
                            'pay_pac' => $order->who_pays->package == $order->{$v}->id ?? false,
                            'pay_ins' => $order->who_pays->insurance == $order->{$v}->id ?? false,
                            'pay_del_to_addr' => $order->who_pays->to_addr == $order->{$v}->id ?? false,
                            'pay_del_from_addr' => $order->who_pays->from_addr == $order->{$v}->id ?? false,
                            'pay_PRR_to_addr' => $order->who_pays->prr_to_addr == $order->{$v}->id ?? false,
                            'pay_PRR_from_addr' => $order->who_pays->prr_from_addr == $order->{$v}->id ?? false,
                            'subtotal' => 0
                        ];
                    } else {
                        $data['payments'][$k] = [
                            'INN' => '',
                            'company' => '',
                            'name' => '',
                            'tel' => '',
                            'email' => '',
                            'pay_all' => false,
                            'pay_TT' =>  false,
                            'pay_pac' =>  false,
                            'pay_ins' =>  false,
                            'pay_del_to_addr' =>  false,
                            'pay_del_from_addr' =>  false,
                            'pay_PRR_to_addr' =>  false,
                            'pay_PRR_from_addr' =>  false,
                            'subtotal' => 0
                        ];
                    }


                    foreach ($data['payments'][$k] as $key => $val) {
                        if ($val == null) {
                            $data['payments'][$k][$key] = '';
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            dump($comps[$k]);
            return $e->getMessage();
        }
        $order->toArray();
        $order['payments'] = $data['payments'];
        $data = json_encode($order);
//        dd($id);

        return view('admin.order_application.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $calc = new Calculator();
        return $calc->update($id , $request['data']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
//        try {
//            $order_application = Order::find($id);
//            $who_pays = WhoPays::find($order_application->who_pays_id)->delete();
//            $order_prices = OrderPrice::($order_application->order_price_id)->delete();
//            $files  = File::find($order_application->files_id)->delete();
//            $order_application->delete();
//            return redirect()->route('admin.orders.index')->with(['success'=>true]);
//        } catch (\Exception $e) {
//            return redirect()->route('admin.orders.index')->with(['error'=>$e->getMessage()]);
//        }

    }
}
