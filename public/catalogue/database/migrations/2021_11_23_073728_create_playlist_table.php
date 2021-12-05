<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreatePlaylistTable extends Migration
{
    
    public function up()
    {
        Schema::create('playlist', function (Blueprint $table) {
            $table->unsignedBigInteger('id_playlist');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('id_user')->references('id')->on('users');
            $table->primary(['id_media','id_playlist']);
            $table->string('namePlaylist');
            $table->timestamps();
        });

    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('playlist');
    }
}