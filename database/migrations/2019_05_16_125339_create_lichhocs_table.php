<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichhocs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idMonhoc');
            $table->foreign('idMonhoc')->references('id')->on('monhocs');
            $table->unsignedInteger('idGiohoc');
            $table->foreign('idGiohoc')->references('id')->on('giohocs');
            $table->unsignedInteger('idPhonghoc');
            $table->foreign('idPhonghoc')->references('id')->on('phonghocs');
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
        Schema::dropIfExists('lichhocs');
    }
}
