<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
             
            $table->increments('id');
            $table->string('login');
            $table->string('password');
       $table->integer('id_role')->unsigned()->index();
            $table->foreign('id_role')
              ->references('id')
              ->on('roles')
              ->onDelete('cascade');

            $table->string('nom');
            $table->string('prenom');
             $table->string('sex');
            $table->string('email');
            $table->string('telephone');
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
        Schema::dropIfExists('users');
    }
}
