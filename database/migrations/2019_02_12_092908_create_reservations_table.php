<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
          
            $table->increments('id');

            $table->integer('id_representation')->unsigned()->index();
            $table->foreign('id_representation')
              ->references('id')
              ->on('representations')
              ->onDelete('cascade'); 
          
            $table->integer('id_user')->unsigned()->index();
            $table->foreign('id_user')
              ->references('id')
              ->on('users')
              ->onDelete('cascade'); 

            $table->integer('id_paiement')->unsigned()->index();
            $table->foreign('id_paiement')
              ->references('id')
              ->on('paiement')
              ->onDelete('cascade'); 
            $table->float('tarif_total')->nullable();
            $table->integer('nbre_place_reserve')->nullable();


                $table->datetime('date_reservation')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
