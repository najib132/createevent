<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosibiliteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posibilite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addevents_id')->unsigned();
            $table->integer('pack_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('hotel_id')->nullable()->unsigned();
            $table->string('plafond');
            $table->string('mantant');
            $table->timestamps();

            $table->foreign('addevents_id')->references('id')->on('addevents')
        
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
        Schema::dropIfExists('posibilite');
    }
}
