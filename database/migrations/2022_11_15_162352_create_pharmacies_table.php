<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name_pharma');
            $table->string('open_day');
            $table->string('close_day');
            $table->string('holiday');
            $table->text('address');
            $table->time('on_time');
            $table->time('close_time');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('cpf');
            $table->string('tel');
            $table->string('photo');
            $table->float('comission');
            $table->string('statut')->default(1);
            $table->string('certificatx');
            $table->text('rastrear')->nullable();
            $table->integer('number_fix')->default(0);
            $table->integer('frete1')->default(0);
            $table->integer('frete2')->default(0);
            $table->integer('frete3')->default(0);
            $table->integer('frete4')->default(0);
            $table->integer('count_like')->default(0);
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
        Schema::dropIfExists('pharmacies');
    }
}
