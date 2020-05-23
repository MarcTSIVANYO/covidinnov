<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 255);
            $table->string('prenoms', 255);
            $table->string('nationalite', 255);
            $table->string('contact', 255);
            $table->integer('region_id');
            $table->integer('ville_id');
            $table->string('marie', 255);
            $table->string('quartier', 255);
            $table->string('geolocalisation', 255);
            $table->integer('typedonateur_id');
            $table->timestamps();
            $table->index(["typedonateur_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donateurs');
    }
}
