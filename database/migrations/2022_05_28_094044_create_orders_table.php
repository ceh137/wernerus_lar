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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('method_id');
//            $table->unsignedBigInteger('route_id');

            $table->foreignId('method_id')->references('id')->on('methods');
            $table->foreignId('route_id')->references('id')->on('routes');

            $table->string('delivery_type');
            $table->integer('weight');
            $table->integer('volume');
            $table->integer('pieces');
            $table->integer('heaviest');
            $table->integer('longest');
            $table->double('worth');
            $table->boolean('to_addr');
            $table->boolean('from_addr');
            $table->boolean('rig_pac');
            $table->boolean('stretch_pac');
            $table->boolean('bort_pac');
            $table->boolean('insurance');
            $table->boolean('prr_to_addr');
            $table->boolean('prr_from_addr');

//            $table->unsignedBigInteger('type_id');
//            $table->unsignedBigInteger('sender_id');
//            $table->unsignedBigInteger('receiver_id');
//            $table->unsignedBigInteger('tp_id');
//            $table->unsignedBigInteger('sender_company_id');
//            $table->unsignedBigInteger('receiver_company_id');
//            $table->unsignedBigInteger('tp_company_id');
//            $table->unsignedBigInteger('order_price_id');
//            $table->unsignedBigInteger('who_pays_id');
            $table->foreignId('type_id')->references('id')->on('types');
            $table->foreignId('sender_id')->references('id')->on('users');
            $table->foreignId('receiver_id')->references('id')->on('users');
            $table->foreignId('tp_id')->references('id')->on('users');
            $table->foreignId('sender_company_id')->references('id')->on('companies');
            $table->foreignId('receiver_company_id')->references('id')->on('companies');
            $table->foreignId('tp_company_id')->references('id')->on('companies');
            $table->foreignId('order_price_id')->references('id')->on('order_prices');
            $table->foreignId('who_pays_id')->references('id')->on('who_pays');

            $table->text('comment')->nullable();
            $table->boolean('filled_at_terminal');

            //$table->unsignedBigInteger('status_id');
            $table->foreignId('status_id')->references('id')->on('order_statuses');

            //$table->unsignedBigInteger('files_id');
            $table->foreignId('files_id')->references('id')->on('files');
            $table->timestamp('time_to_order');
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
        Schema::dropIfExists('orders');
    }
};
