<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\FileService;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index($id) {
        $service = new FileService($id);

        return $service->nakladnaya();

    }
}
