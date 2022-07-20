<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\FileService;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Knp\Snappy\Pdf;

class PrintController extends Controller
{
    public function index() {
        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->inline();


//        $pdf = Pdf::loadView('files.nakladnaya');
//        $pdf->render();
//        $pdf->stream();g

//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadView('files.nakladnaya');
//        return $pdf->stream();

    }
}
