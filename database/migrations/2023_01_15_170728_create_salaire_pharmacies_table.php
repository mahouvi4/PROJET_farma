<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalairePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaire_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pharmacie');
            $table->string('total_vente');
            $table->string('benefice_plat');
            $table->string('benefice_pharma');
            $table->float('comix');
            $table->text('motiva');
            $table->date('datax');
            $table->integer('statut')->default(1);
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
        Schema::dropIfExists('salaire_pharmacies');
    }
}
