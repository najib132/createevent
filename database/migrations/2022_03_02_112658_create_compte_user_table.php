<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_user', function (Blueprint $table) {
            $table->id();
            $table->integer('addevents_id')->unsigned();
            $table->string('type');
            $table->string('nom');
            $table->dateTime('prenom');
            $table->dateTime('gsm');
            $table->string('mail');
            $table->string('password');
            $table->string('nom_societe');
            $table->string('responsabilite');
            $table->string('game');
            $table->string('service');
            $table->string('confirmation_data');
            $table->string('confirmation_compte')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('compte_user');
    }
}
