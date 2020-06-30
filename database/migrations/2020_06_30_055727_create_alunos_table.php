<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome');
            $table->string('login')->unique();
            $table->string('senha');
            $table->string('cpf');
            $table->string('rg');
            $table->string('data');
            $table->string('sexo');
            $table->string('sangue');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereço');
            $table->string('doença');
            $table->string('turno');
            $table->string('peso');
            $table->string('altura');
            $table->string('plano');
            $table->string('modalidade');
            $table->string('motivo');
            $table->string('limitações');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
