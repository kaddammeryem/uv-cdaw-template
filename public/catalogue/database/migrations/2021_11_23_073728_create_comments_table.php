<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->date('date_comment');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('id_user')->references('id')->on('users');
            $table->primary(['id_media','id_user']);
            $table->longText('contenu');
            $table->timestamps();
        });

    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
