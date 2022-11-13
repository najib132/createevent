<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAteliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ateliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addevents_id')->unsigned();
            $table->string('name');
            $table->string('mantant');
            $table->string('role');
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
        Schema::dropIfExists('ateliers');
    }
}
