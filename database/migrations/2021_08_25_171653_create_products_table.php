<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('profit_margin');
            $table->integer('length');
            $table->integer('width');
            $table->integer('height');
            $table->integer('weight');
            $table->string('category');
            $table->string('address_inventory');
            $table->text('description');
            $table->string('model');
            $table->string('material');
            $table->integer('user_create_id');
<<<<<<< HEAD
            $table->timestamps();

            $table->foreign('user_create_id')->references('id')->on('users');            

=======
            $table->foreign('user_create_id')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
}
