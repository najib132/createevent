<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesocieteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptesociete', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addevents_id')->unsigned();
            $table->string('nom');
            $table->string('prenom');
            $table->string('gsm');
            $table->string('email');
            $table->string('password');
            $table->string('Nm_societe');
            $table->string('ice');
            $table->string('adressePh');
            $table->string('responssable');
            $table->string('game');
            $table->string('service');
            $table->timestamps();

            $table->foreign('addevents_id')->references('id')->on('addevents')
        
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptesociete');
    }
}
