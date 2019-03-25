<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sieges', function (Blueprint $table) {
            
            $table->increments('id');
         
               $table->integer('id_salle')->unsigned()->index();
            $table->foreign('id_salle')
              ->references('id')
              ->on('salles')
              ->onDelete('cascade');

            $table->string('type_siege')->nullable();
            $table->double('prix_siege')->nullable();
                    
            $table->string('nom_siege');


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
        Schema::dropIfExists('sieges');
    }
}
