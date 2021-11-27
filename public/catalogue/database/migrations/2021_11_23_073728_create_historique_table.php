<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateHistoriqueTable extends Migration
{
    
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('id_user')->references('id')->on('users');
            $table->primary(['id_media','id_user']);
            $table->date('date');
            $table->timestamps();
        });

    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('history');
    }
}