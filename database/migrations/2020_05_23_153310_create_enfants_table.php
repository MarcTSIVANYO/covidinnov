<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 255);
            $table->string('prenoms', 255);
            $table->string('nationalite', 255);
            $table->datetime('datenaiss');
            $table->string('villenaiss', 255);
            $table->enum('responsabilite', 'Tutueur', 'Tutrice', 'Pere', 'Mere');
            $table->string('pere', 255);
            $table->string('mere', 255);
            $table->enum('typepiece', 'CNI', 'CENI', 'PASSPORT');
            $table->string('numeropieces', 255);
            $table->integer('citoyen_id');
            $table->timestamps();
            $table->index(["citoyen_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfants');
    }
}
