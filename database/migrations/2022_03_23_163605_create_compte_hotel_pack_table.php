<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteHotelPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_hotel_pack', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comptesociete_id')->unsigned();
            $table->integer('pack_id')->unsigned();
            $table->integer('hotel_id')->nullable()->unsigned();
            $table->integer('event_id')->nullable()->unsigned();
            $table->integer('role_id')->nullable()->unsigned();
            $table->string('nombre')->nullable();
            $table->string('confirmation')->nullable();
            $table->timestamps();

            $table->foreign('comptesociete_id')->references('id')->on('comptesociete')

            ->onDelete('cascade');

            $table->foreign('pack_id')->references('id')->on('pack')

            ->onDelete('cascade');

            $table->foreign('role_id')->references('id')->on('role')

            ->onDelete('cascade');

            $table->foreign('hotel_id')->references('id')->on('hotels')

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
        Schema::dropIfExists('compte_hotel_pack');
    }
}
