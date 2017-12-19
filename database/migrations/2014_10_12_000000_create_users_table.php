<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nivel');
            $table->string('imagem')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('cpf',11)->nullable();
            $table->date('aniversario')->nullable();
            $table->string('cep',10)->nullable();
            $table->string('rua',50)->nullable();
            $table->string('numero',10)->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro',30)->nullable();
            $table->string('cidade',30)->nullable();
            $table->string('estado',30)->nullable();
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
