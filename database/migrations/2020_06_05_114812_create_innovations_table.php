<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInnovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('type_innovation_id')->unsigned();
            $table->foreign('type_innovation_id')
                ->references('id')
                ->on('type_innovations')
                ->onDelete('cascade');
            $table->Integer('pays_id')->unsigned();
            $table->foreign('pays_id')
                ->references('id')
                ->on('pays')
                ->onDelete('cascade'); 
            $table->string('titre');
            $table->text('description');
            $table->string('url');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('lien');
            $table->string('email'); 
            $table->string('email'); 
            $table->Integer('publier')->nullable();
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
        Schema::dropIfExists('innovations');
    }
}
