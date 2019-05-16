<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLichhoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lichhoc', function (Blueprint $table) {
            $table->unsignedInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');
            $table->unsignedInteger('idLichhoc');
            $table->foreign('idLichhoc')->references('id')->on('lichhocs');
            $table->unsignedInteger('state');
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
        //
    }
}
