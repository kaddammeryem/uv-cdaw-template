<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSuggestionsTable extends Migration
{
    
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->unsignedBigInteger('id_media');
            $table->unsignedBigInteger('id_similaire');
            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('id_similaire')->references('id')->on('medias');
            $table->primary(['id_media','id_similaire']);
            $table->timestamps();
        });

    }
    public function down()
    {
        Schema::dropIfExists('suggestions');
    }
}
/*
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->string('email');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('email')->references('email')->on('users');
            $table->primary(['id_media','email']);
            $table->longText('contenu');
            $table->timestamps();
        });

    }

    
   
  
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}


*/