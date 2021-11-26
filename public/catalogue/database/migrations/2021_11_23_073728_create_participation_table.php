<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateParticipationTable extends Migration
{
    
    public function up()
    {
        Schema::create('participation', function (Blueprint $table) {
            $table->unsignedBigInteger('id_participant');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('id_participant')->references('id')->on('participants');
            $table->primary(['id_media','id_participant']);
            $table->timestamps();
        });

    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('participation');
    }
}


