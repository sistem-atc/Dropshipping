<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idproduct');
<<<<<<< HEAD
            $table->text('images');
            $table->timestamps();

            $table->foreign('idproduct')->references('id')->on('products');
            
=======
            $table->foreign('idproduct')->references('id')->on('products');
            $table->text('images');
            $table->timestamps();
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
        Schema::dropIfExists('imagems');
    }
}
