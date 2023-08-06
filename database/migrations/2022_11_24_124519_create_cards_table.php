<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qt');
            $table->float('prix_frete')->default(0);
            $table->integer('aller_retirer')->default(0);
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_medico')->unsigned();
            $table->foreign('id_medico')->references('id')->on('medicos')->onDelete('cascade');
            $table->integer('id_pharmacie')->unsigned();
            $table->foreign('id_pharmacie')->references('id')->on('pharmacies')->onDelete('cascade');
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
        Schema::dropIfExists('cards');
    }
}