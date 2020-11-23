<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('cpf')->unique();
            $table->string('name');
            //$table->string('sexo')->nullable();
            //$table->string('aniversario')->nullable();
            //$table->string('funcao')->nullable();
            $table->string('password');
            //$table->string('salario')->nullable();
            //$table->string('fone')->nullable();
            //$table->string('estado')->nullable();
            //$table->string('rua')->nullable();
            //$table->string('cep')->nullable();
            //$table->string('cidade')->nullable();
           // $table->string('bairro')->nullable();
            //$table->integer('numero_casa')->nullable(); 
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
        Schema::dropIfExists('admins');
    }
}
