<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
   
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->longText('avatar');
            $table->date('naissance');
            $table->string('phone');
            $table->string('quote');
            $table->string('role')->default('normal');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE users ADD PRIMARY KEY (email)");
        DB::statement("ALTER TABLE users DD CONSTRAINT chk_role CHECK (role IN 'administrateur, moderateur,normal')");
        DB::statement("ALTER TABLE users ADD CONSTRAINT chk_email CHECK (email like '%@%.%' )");
        DB::statement("ALTER TABLE users ADD CONSTRAINT chk_phone CHECK (phone like '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')"); 

    }

   
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

