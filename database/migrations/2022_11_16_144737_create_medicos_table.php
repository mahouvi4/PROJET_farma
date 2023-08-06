<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Reference');
            $table->string('nom_pro');
            $table->text('desciption');
            $table->float('prix');
            $table->integer('prix_desconte')->nullable();
            $table->integer('desconte')->default(0);
            $table->integer('kilo');
            $table->integer('stock');
            $table->date('date_fabriq');
            $table->date('date_expir');
            $table->string('photo');
            $table->integer('id_pharmacie')->unsigned();
            $table->foreign('id_pharmacie')->references('id')->on('pharmacies')->onDelete('cascade');
            $table->string('statut')->default(1);
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
        Schema::dropIfExists('medicos');
    }
}
