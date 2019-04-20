<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
             
              $table->increments('id');

            $table->integer('id_user')->unsigned()->index();
            $table->foreign('id_user')
              ->references('id')
              ->on('users')
              ->onDelete('cascade'); 
              
         $table->string('numero_compte');
         $table->string('numero_carte');
         $table->string('nom');
         $table->string('prenom');
          $table->datetime('date_expiration');

            $table->string('type_carte');

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
        Schema::dropIfExists('paiements');
    }
}
