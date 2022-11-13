<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('addevents_id')->unsigned();
            $table->string('num');
            $table->string('type');
            $table->dateTime('checkIn')->nullable();
            $table->dateTime('checkOut')->nullable();
            $table->string('nbTicketsRepas');
            $table->string('contenu');
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
        Schema::dropIfExists('pack');
    }
}
