<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_prices', function (Blueprint $table) {
            $table->id();
            $table->double('TT_price');
            $table->double('to_addr_price');
            $table->double('from_addr_price');
            $table->double('pac_price');
            $table->double('insurance_price');
            $table->double('prr_to_addr_price');
            $table->double('prr_from_addr_price');
            $table->double('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_prices');
    }
};
