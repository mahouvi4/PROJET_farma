<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('cpf')->nullable();
            $table->string('ddd')->nullable();
            $table->string('tel')->nullable();
            $table->date('nacimento')->nullable();
            //data cartao
            $table->string('firstname')->nullable();
            $table->string('nomecartao');
            $table->string('ncredito');
            $table->string('ncvv');
            $table->string('mesexp');
            $table->string('anoexp');
            $table->string('bandeira');
            $table->string('nparcela');
            $table->float('totalfinal');
            $table->float('totalparcela');
            $table->float('totalapagar');
            $table->float('totalfinaliz');

            $table->string('statut')->default(1);
            //commande
            $table->integer('id_list_com');
            $table->integer('id_pharmacie');
            $table->integer('id_user');
            $table->softDeletes();
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
        Schema::dropIfExists('pagamentos');
    }
}