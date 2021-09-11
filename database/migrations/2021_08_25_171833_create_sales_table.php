<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_request');
            $table->string('cod_rastreio');
            $table->string('id_anuncio');
            $table->integer('product');
<<<<<<< HEAD
=======
            $table->foreign('product')->references('id')->on('products');
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
            $table->integer('id_buyer');
            $table->string('status');
            $table->string('tipo_envio');
            $table->timestamps();
<<<<<<< HEAD

            $table->foreign('product')->references('id')->on('products');

=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
