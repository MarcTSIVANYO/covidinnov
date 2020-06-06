<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        public function up()
    {
        Schema::create('acteurs', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nom', 255);
            $table->string('prenoms', 255);
            $table->string('adresse', 255);
            $table->string('contact', 255);
            $table->datetime('datecreation');
            $table->string('profession', 255);
            $table->string('numerorccm', 255);
            $table->enum('entravail', 'O', 'N');
            $table->datetime('datearret');
            $table->string('produitsdispo', 255);
            $table->string('productionactuelle', 255);
            $table->integer('tyacteur_id');
            $table->timestamps();
            $table->index(["tyacteur_id"]);
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acteurs');
    }
}
