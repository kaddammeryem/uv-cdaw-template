<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreatePlaylistTable extends Migration
{
    
    public function up()
    {
        Schema::create('playlist', function (Blueprint $table) {
            $table->string('email');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('email')->references('email')->on('users');
            $table->primary(['id_media','email']);
            $table->longText('namePlaylist');
            $table->timestamps();
        });

    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('playlist');
    }
}