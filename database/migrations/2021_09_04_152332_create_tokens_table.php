<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->integer('recording_user');
            $table->integer('company');
=======
            $table->integer('company');
            $table->foreign('company')->references('id')->on('companies');
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
            $table->string('access_token');
            $table->integer('expires_in');
            $table->integer('user_id');
            $table->string('refresh_token');
            $table->timestamps();
<<<<<<< HEAD

            $table->foreign('recording_user')->references('id')->on('users');
            $table->foreign('company')->references('id')->on('companies');

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
        Schema::dropIfExists('tokens');
    }
}
