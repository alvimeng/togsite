<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsforcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esforcos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dono')->unsigner();
            $table->foreign('dono')->references('id')->on('users');
            $table->integer('categoria_id')->unsigner();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('imagem')->nullable();
            $table->string('nome');
            $table->text('descricao');
            $table->string('cidade');
            $table->string('complemento')->nullable();
            $table->string('local');
            $table->enum('local_exclusivo',['sim','nao'])->default('nao');
            $table->date('termino');
            $table->date('inicio');
            $table->integer('maxparticipantes');
            $table->integer('minparticipantes');            
            $table->integer('participantes')->unsigner()->nullable();
            $table->foreign('participantes')->references('id')->on('users');
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
        Schema::dropIfExists('esforcos');
    }
}
