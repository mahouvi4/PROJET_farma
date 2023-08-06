<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_commande');
            $table->float('total_commande');
            $table->text('commentax')->nullable();


            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_pharmacie')->unsigned();
            $table->foreign('id_pharmacie')->references('id')->on('pharmacies')->onDelete('cascade');

            $table->string('firstname');
            $table->string('name');
            $table->date('nacimento');
            $table->string('country');
            $table->string('street');
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->integer('codzip');
            $table->integer('tel');
            $table->integer('ddd');
            $table->integer('n_apt');
            $table->string('email');
            $table->string('cpf');
            $table->string('statut')->default(0);
            $table->string('consolidation')->default(0);
            //$table->softDeletes();
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
        Schema::dropIfExists('commandes');
    }
}
