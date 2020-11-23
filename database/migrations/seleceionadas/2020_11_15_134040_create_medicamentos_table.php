<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantidade');
            $table->double('preco_compra');
            $table->date('data_compra');
            $table->date('data_vencimento');
            $table->string('marca');
            $table->double('preco_venda');

            $table->string('cnpj_fornecedor');
            $table->unsignedBigInteger('id_compra');

            $table->foreign('cnpj_fornecedor')->references('cnpj')->on('fornecedores');
            $table->foreign('id_compra')->references('id')->on('compras');
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
        Schema::dropIfExists('medicamentos');
    }
}
