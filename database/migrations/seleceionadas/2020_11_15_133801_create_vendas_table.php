<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->date('data_venda');
            $table->double('valor');
            $table->integer('quantidade');

            $table->string('cpf_vendedor');
            $table->string('cpf_cliente');

            $table->foreign('cpf_vendedor')->references('cpf')->on('users');
            $table->foreign('cpf_cliente')->references('cpf')->on('clientes');


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
        Schema::dropIfExists('vendas');
    }
}
