<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiecesTheatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces_theatres', function (Blueprint $table) {
           $table->increments('id');

            $table->string('slug');
            $table->string('titre');
             $table->string('image_poster');
            $table->string('description');
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
        Schema::dropIfExists('pieces_theatres');
    }
}
