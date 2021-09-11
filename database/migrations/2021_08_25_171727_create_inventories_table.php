<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nf');
            $table->integer('serie');
            $table->decimal('total_value', 12,2);
            $table->integer('cfop');
            $table->string('tax');
            $table->string('namecompany');
            $table->string('cpf_cnpj');
            $table->integer('ie');
            $table->integer('cod_produto');
            $table->integer('qtd');
            $table->decimal('unitary_value', 12,2);
            $table->integer('user_create_id');
            $table->timestamps();

            $table->foreign('cod_produto')->references('id')->on('products');
            $table->foreign('user_create_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
