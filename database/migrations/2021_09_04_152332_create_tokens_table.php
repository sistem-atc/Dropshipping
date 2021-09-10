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
            $table->integer('recording_user');
            $table->integer('company');
            $table->string('access_token');
            $table->integer('expires_in');
            $table->integer('user_id');
            $table->string('refresh_token');
            $table->timestamps();

            $table->foreign('recording_user')->references('id')->on('users');
            $table->foreign('company')->references('id')->on('companies');

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
