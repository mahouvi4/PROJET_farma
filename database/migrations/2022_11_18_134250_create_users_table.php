<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('name');
            $table->date('nacimento')->nullable();
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('codzip')->nullable();
            $table->integer('tel')->nullable();
            $table->integer('ddd')->nullable();
            $table->integer('n_apt')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cpf')->nullable();
            $table->string('actif')->default(0);
            $table->string('photo');
            $table->string('code_securite');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('statut')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
