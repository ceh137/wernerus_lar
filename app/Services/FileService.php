<?php

namespace App\Services;

use App\Models\Order;
use CURLFile;
use phpseclib3\Exception\FileNotFoundException;

class FileService
{
//    public Order  $order;

    public function __construct()
    {
//        $this->order = Order::find($id);
    }

    public function nakladnaya()  {

        try {
            $FileHandle = fopen('result.pdf', 'w+');

            $curl = curl_init();

            $instructions = '{
  "parts": [
    {
      "html": "index.html",
    }
  ]
}';

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.pspdfkit.com/build',
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_POSTFIELDS => array(
                    'instructions' => $instructions,
                    'index.html' => new CURLFILE('nakladnaya.html'),
                ),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer pdf_live_QRnnPuevaijacS3bInQQZ236ym4U78x6ZnjYRNPx7vp'
                ),
                CURLOPT_FILE => $FileHandle,
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            fclose($FileHandle);
        } catch (\Exception $e) {
            return $e->getMessage();
        }


    }
}
