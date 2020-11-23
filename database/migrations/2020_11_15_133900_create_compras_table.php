<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->double('valor_total');
            $table->integer('quant_tot_comprada');
            //$table->date('data');

            $table->string('cpf_gerente');
            //$table->string('cnpj_fornecedor');

            $table->foreign('cpf_gerente')->references('cpf')->on('admins');
            //$table->foreign('cnpj_fornecedor')->references('cnpj')->on('fornecedores');

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
        Schema::dropIfExists('compras');
    }
}
