<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos_vendidos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->double('preco_unidade');
            $table->double('valor_total');
            $table->string('nome');

            $table->unsignedBigInteger('id_medicamento');
            $table->unsignedBigInteger('id_venda');

            $table->foreign('id_medicamento')->references('id')->on('medicamentos');
            $table->foreign('id_venda')->references('id')->on('vendas');
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
        Schema::dropIfExists('medicamentos_vendidos');
    }
}
