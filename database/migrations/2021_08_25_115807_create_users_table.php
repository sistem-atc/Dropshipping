<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company');
<<<<<<< HEAD
=======
            $table->foreign('company')->references('id')->on('companies');
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('cpf');
            $table->string('phone');
            $table->string('cep');
            $table->string('address');
            $table->string('number');
            $table->string('city');
            $table->string('uf');
            $table->boolean('ative');
            $table->integer('paper');
<<<<<<< HEAD
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();

            $table->foreign('company')->references('id')->on('companies');
            $table->foreign('paper')->references('id')->on('roles');
=======
            $table->foreign('paper')->references('id')->on('roles');
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
        Schema::dropIfExists('users');
    }
}
