<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj')->unique();
            $table->string('name');
            $table->string('funcao');
            $table->string('fone');
            $table->string('estado');
            $table->string('rua');
            $table->string('cep');
            $table->string('cidade');
            $table->string('bairro');
            $table->integer('numero_empresa');
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
        Schema::dropIfExists('fornecedores');
    }
}
