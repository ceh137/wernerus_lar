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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string("nakladnaya_nds")->nullable()->unique();
            $table->string("nakladnaya")->nullable()->unique();
            $table->string("UPD")->nullable()->unique();
            $table->string("UPD_nds")->nullable()->unique();
            $table->string("PE")->nullable()->unique();
            $table->string("PE_nds")->nullable()->unique();
            $table->string("check")->nullable()->unique();
            $table->string("check_nds")->nullable()->unique();
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
        Schema::dropIfExists('files');
    }
};
