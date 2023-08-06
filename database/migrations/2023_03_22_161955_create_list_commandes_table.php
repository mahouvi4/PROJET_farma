<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_commandes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_commande')->unsigned();
            $table->foreign('id_commande')->references('id')->on('commandes')->onDelete('cascade');

            
            
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            
            $table->integer('id_medico')->unsigned();
            $table->foreign('id_medico')->references('id')->on('medicos')->onDelete('cascade');

            
            $table->integer('id_pharmacie')->unsigned();
            $table->foreign('id_pharmacie')->references('id')->on('pharmacies')->onDelete('cascade');

            $table->string('qt_list');
            $table->float('total_list');
            $table->integer('desconte');
            $table->float('distance');
            $table->float('prix');
            $table->float('prix_frete');
            $table->integer('aller_retirer');
            $table->integer('verifier_statut_entrega');
            $table->integer('injection_map')->nullable();
            $table->integer('statut')->default(0);

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
        Schema::dropIfExists('list_commandes');
    }
}

