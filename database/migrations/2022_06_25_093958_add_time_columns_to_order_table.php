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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('del_from_addr_time_from')->nullable();
            $table->string('del_from_addr_time_to')->nullable();
            $table->string('del_to_addr_time_from')->nullable();
            $table->string('del_to_addr_time_to')->nullable();
            $table->string('date_del_to_addr')->nullable();
            $table->string('date_del_from_addr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_application', function (Blueprint $table) {
            //
        });
    }
};
