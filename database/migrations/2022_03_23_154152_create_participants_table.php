<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->integer('comptesociete_id')->unsigned();
            $table->integer('pack_id')->unsigned();
            $table->integer('hotel_id')->nullable()->unsigned();
            $table->integer('event_id')->nullable()->unsigned();
            $table->integer('role_id')->nullable()->unsigned();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('mail');
            $table->string('gsm');
            $table->string('ville');
            $table->string('index_badge');
            $table->string('etat');
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('type_chambre')->nullable();
            $table->string('accompagnant')->nullable();
            $table->string('codebare');
            $table->integer('nb_ticketsrepas')->nullable();
            $table->integer('atelier_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('addevents')
        
            ->onDelete('cascade');

            $table->foreign('pack_id')->references('id')->on('pack')
        
            ->onDelete('cascade');

            $table->foreign('role_id')->references('id')->on('role')
        
            ->onDelete('cascade');

            $table->foreign('hotel_id')->references('id')->on('hotels')
        
            ->onDelete('cascade');

            $table->foreign('comptesociete_id')->references('id')->on('comptesociete')
        
            ->onDelete('cascade');

           /*  $table->foreign('nb_ticketsrepas')->references('id')->on('pack')
        
            ->onDelete('cascade'); */

            $table->foreign('atelier_id')->references('id')->on('ateliers')
        
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
        Schema::dropIfExists('participants');
    }
}
