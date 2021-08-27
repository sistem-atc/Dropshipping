<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventorys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nf');
            $table->integer('products');
            $table->foreign('products')->references('id')->on('products');
            $table->integer('qtd');
            $table->decimal('unitary_value', 12,2);
            $table->decimal('total_value', 12,2);
            $table->decimal('tax', 12,2);
            $table->integer('user_create_id');
            $table->foreign('user_create_id')->references('id')->on('users');
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
        Schema::dropIfExists('inventorys');
    }
}
