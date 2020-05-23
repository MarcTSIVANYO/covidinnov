<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitoyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citoyens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 255);
            $table->string('prenoms', 255);
            $table->string('nationalite', 255);
            $table->string('contact', 255);
            $table->datetime('datenaiss');
            $table->string('villenaiss', 255);
            $table->enum('typepiece', 'CNI', 'CENI', 'PASSPORT');
            $table->string('numeropieces', 255);
            $table->enum('civilites', 'M', 'F');
            $table->string('pere', 255);
            $table->string('mere', 255);
            $table->string('salaire', 255);
            $table->enum('entravail', 'O', 'N');
            $table->datetime('datearret');
            $table->integer('nbrefemmes');
            $table->integer('montantdepense');
            $table->string('aliments', 255);
            $table->string('lieuacquisition', 255);
            $table->string('marcheproche', 255);
            $table->string('boutiqueproche', 255);
            $table->integer('typecitoyen_id');
            $table->integer('region_id');
            $table->integer('ville_id');
            $table->string('marie', 255);
            $table->string('quartier', 255);
            $table->string('geolocalisation', 255);
            $table->timestamps();
            $table->index(["typecitoyen_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citoyens');
    }
}
