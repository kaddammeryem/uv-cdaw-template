<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateFilmsTable extends Migration
{
    
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId(column:'categorie_id')->constrained(table:'categories');
            $table->longText('image');
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