<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Order;
use App\Models\Route;
use App\Services\Calculator;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function about() {
        return view('index.about');
    }

    public function prices() {
        return view('index.prices');
    }

    public function docs() {
        return view('index.docs');
    }

    public function order() {
        return view('index.order');
    }

    public function order_post(Request $request) {

        try {
            $calc = new Calculator();
            return $calc->save($request['data']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function contacts() {
        return view('index.contacts');
    }

    public function save_routes(Request $request) {

//        try {
//            $SPB = City::where('code', '=', 'SPB')->get('id');
//            $MSK = City::where('code', '=', 'MSK')->get('id');
//
//            $cities = City::all();
//
//            foreach ($cities as $city) {
//                $route = new Route();
//                $route->from_city_id = $SPB[0]['id'];
//                $route->to_city_id = $city->id;
//                $route->save();
//        }
//            foreach ($cities as $city) {
//                $route = new Route();
//                $route->from_city_id = $MSK[0]['id'];
//                $route->to_city_id = $city->id;
//                $route->save();
//            }
//            return Route::all();
//        } catch (\Exception $exception) {
//            return json_encode([$exception->getMessage(), $SPB, $MSK]);
//        }

    }

    public function status(Request $request) {

        $order = Order::where('order_num', '=', $request->order_num)->first();
        $order_num = $request->order_num;

        if ($order) {
            return view('index.status', compact('order', 'order_num'));
        } else {
            return view('index.status', compact('order_num'))->with(['error' => 'order_not_found']);
        }
    }
}
