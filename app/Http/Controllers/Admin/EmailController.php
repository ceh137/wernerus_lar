<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApplicationReceived;
use App\Mail\Invoice;
use App\Mail\UPD;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function test() {
//        $order = Order::findOrFail();

        Mail::to(auth()->user())->send(new UPD());
    }
}
