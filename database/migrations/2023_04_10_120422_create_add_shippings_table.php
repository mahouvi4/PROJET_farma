<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_shippings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('receiv_user_com')->nullable();
            $table->string('receiv_country')->nullable();
            $table->string('receiv_state')->nullable();
            $table->string('receiv_district')->nullable();
            $table->string('receiv_city')->nullable();
            $table->string('receiv_street')->nullable();
            $table->integer('receiv_npt')->nullable();
            $table->string('receiv_cpf')->nullable();
            $table->integer('id_commande')->unsigned();
            $table->foreign('id_commande')->references('id')->on('commandes')->onDelete('cascade');
            $table->string('statut')->default(0);
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
        Schema::dropIfExists('add_shippings');
    }
}