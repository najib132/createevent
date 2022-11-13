<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //Schema::disableForeignKeyConstraints();
        
        Schema::create('contenus', function (Blueprint $table) {
            $table->increments('id');
        
            $table->integer('addevents_id')->unsigned();
        
            $table->string("contenu");
        
            $table->timestamps();
        
            $table->foreign('addevents_id')->references('id')->on('addevents')
        
                ->onDelete('cascade');
            
        
                /*$table->id();
                $table->string('contenu');
                $table->timestamps();
                $table->softDeletes();
                $table->unsignedBigInteger('addevents_id');
                $table->foreign('addevents_id')
                    ->references('id')
                    ->on('addevents')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');*/
        
        });

    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenus');
    }
}
