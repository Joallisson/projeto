<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('cpf')->primary()->unique();
            $table->string('name');
            $table->string('sexo');
            $table->string('aniversario');
            $table->double('debito');
            $table->string('password');
            $table->string('fone');
            $table->string('estado');
            $table->string('rua');
            $table->string('cep');
            $table->string('cidade');
            $table->string('bairro');
            $table->integer('numero_casa')->nullable();
            $table->string('email')->unique();
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
        Schema::dropIfExists('clientes');
    }
}
