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
            $table->id();
            $table->string('cpf')->unique();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            /*$table->string('sexo');
            $table->date('aniversario');
            $table->string('funcao');
            $table->double('salario');
            $table->string('fone');
            $table->string('estado');
            $table->string('rua');
            $table->string('cep');
            $table->string('cidade');
            $table->string('bairro');
            $table->integer('numero_casa')->nullable(); */
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
