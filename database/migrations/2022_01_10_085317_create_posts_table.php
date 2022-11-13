<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_logo');
            $table->string('image_slide');
            $table->string('image_banier');
            $table->string('programme');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->string('lieux');
            $table->string('siteweb');
            $table->string('perefix');
            $table->string('deadline');
            $table->string('affichage_deadline');
            $table->string('Urlspon');
            $table->string('Urlheberg');
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
        Schema::dropIfExists('posts');
    }
}
