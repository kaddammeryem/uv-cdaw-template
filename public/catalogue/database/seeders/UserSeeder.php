<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('films')->insert([
            'name' => Str::random(10),
            'categorie_id' => rand(2,10),
            'image' => Str::random(10)
           ]);*/
        \App\Models\User::factory(1)->create();

        //
    }
}
