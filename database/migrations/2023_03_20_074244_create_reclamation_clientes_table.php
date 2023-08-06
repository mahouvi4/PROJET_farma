<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamation_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('objet');
            $table->string('message');
            $table->integer('id_user');
            $table->integer('statut')->default(0);
            
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
        Schema::dropIfExists('reclamation_clientes');
    }
}
