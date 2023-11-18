<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoisPersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mois_personne', function (Blueprint $table) {
            $table->id();

              //$table->integer('personne_id');
            //$table->unsignedInteger('mois_id');
            $table->integer('montant');
            $table->boolean('dart_taker');
            
            $table->foreignId("personne_id")->constrained("personnes");
            $table->foreignId("mois_id")->constrained("mois");

            
              

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
        Schema::dropIfExists('mois_personne');
    }
}
