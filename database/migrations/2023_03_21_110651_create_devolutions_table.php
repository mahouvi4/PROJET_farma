<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolutions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_list');
            $table->integer('id_commande');
            $table->integer('id_user');
            $table->integer('id_medico');
            $table->integer('id_pharmacie');
            $table->integer('id_pagamento');
            $table->integer('qt_list');
            $table->float('total_list');
            $table->float('devolution_pharma');
            $table->float('taxo');
            $table->string('code_commande');
            $table->integer('statut')->default(1);
            $table->timestamps();




        });
    }/*

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devolutions');
    }
}
