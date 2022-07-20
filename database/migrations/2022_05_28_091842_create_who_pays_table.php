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
        Schema::create('who_pays', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('TT');
//            $table->unsignedBigInteger('to_addr');
//            $table->unsignedBigInteger('from_addr');
//            $table->unsignedBigInteger('package');
//            $table->unsignedBigInteger('insurance');
//            $table->unsignedBigInteger('prr_to_addr');
//            $table->unsignedBigInteger('prr_from_addr');
//            $table->unsignedBigInteger('total');

            $table->foreignId('TT')->nullable()->references('id')->on('customers');
            $table->foreignId('to_addr')->nullable()->references('id')->on('customers');
            $table->foreignId('from_addr')->nullable()->references('id')->on('customers');
            $table->foreignId('package')->nullable()->references('id')->on('customers');
            $table->foreignId('insurance')->nullable()->references('id')->on('customers');
            $table->foreignId('prr_to_addr')->nullable()->references('id')->on('customers');
            $table->foreignId('prr_from_addr')->nullable()->references('id')->on('customers');
            $table->foreignId('total')->nullable()->references('id')->on('customers');
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
        Schema::dropIfExists('who_pays');
    }
};
