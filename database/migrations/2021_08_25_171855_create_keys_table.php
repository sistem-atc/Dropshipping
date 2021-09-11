<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
<<<<<<< HEAD
=======
            $table->foreign('id_user')->references('id')->on('users');
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
            $table->string('name_dp');
            $table->string('appid');
            $table->string('secretkey');
            $table->timestamps();
<<<<<<< HEAD

            $table->foreign('id_user')->references('id')->on('users');

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
        Schema::dropIfExists('keys');
    }
}
