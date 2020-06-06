<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_users');
            $table->string('nom_users', 255);
            $table->string('prenoms_users', 255);
            $table->string('sexe_users', 255);
            $table->string('date_users', 255);
            $table->string('email', 255);
            $table->string('adresse_users', 255);
            $table->string('contact_users', 255);
            $table->string('logo_users', 255);
            $table->string('ville_users', 255);
            $table->string('login_users', 64);
            $table->string('password', 64);
            $table->string('remember_token', 100);
            $table->tinyInteger('publier_users')->default('1');
            $table->tinyInteger('visible_users')->default('1');
            $table->integer('admin')->default('0');
            $table->integer('status');
            $table->string('token', 255);
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
        Schema::dropIfExists('users');
    }
}
