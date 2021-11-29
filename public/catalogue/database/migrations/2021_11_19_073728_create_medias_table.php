<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateMediasTable extends Migration
{
    
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('image');
            $table->string('type');
            $table->string('genres');
            $table->integer('year');
            $table->string('runtimeStr');
            $table->timestamps();
        });
    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('medias');
    }
}