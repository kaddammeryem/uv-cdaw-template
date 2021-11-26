<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateParticipantsTable extends Migration
{
    
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('fonction');
            $table->timestamps();
           
        });
    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}