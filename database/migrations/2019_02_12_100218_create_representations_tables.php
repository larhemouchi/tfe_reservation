<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table) {
            
  $table->increments('id');

 $table->integer('id_piece_theatre')->unsigned()->index();
            $table->foreign('id_piece_theatre')
              ->references('id')
              ->on('pieces_theatres')
              ->onDelete('cascade');

 $table->datetime('date_representation')->nullable();

 $table->integer('id_salle')->unsigned()->index();
            $table->foreign('id_salle')
              ->references('id')
              ->on('salles')
              ->onDelete('cascade');

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
        Schema::dropIfExists('representations');
    }
}
