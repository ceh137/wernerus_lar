<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account() {
        $orders = Order::where('sender_id', '=', auth()->user()->id)
            ->orWhere('receiver_id', '=', auth()->user()->id)
            ->orWhere('tp_id', '=', auth()->user()->id)
            ->with([
                'order_prices',
                'route',
                'sender',
                'receiver',
                'tp',
                'sender_comp',
                'receiver_comp',
                'tp_comp',
                'cargo_type',
                'who_pays',
                'files',
                'method',
                'status'
            ])->get();
        return view('index.account', compact('orders'));
    }
}
