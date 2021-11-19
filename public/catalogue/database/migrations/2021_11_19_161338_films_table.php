<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class FilmsTable extends Migration
{
    
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId(column:'categorie_id')->constrained(table:'categories');
            $table->longText('path');
            $table->string('director');
            $table->timestamps();
        });
    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
?>