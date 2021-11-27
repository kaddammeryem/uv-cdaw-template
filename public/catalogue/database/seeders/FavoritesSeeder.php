<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Media;
class FavoritesSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        for($i=0;$i<10;$i=$i+1){
            $user=$users[$i];
            for($j=0;$j<rand(1,3);$j=$j+1){
                DB::table('favorites')->insert([
                'email'=> $user->email,
                'id_media'=>rand(11,30),
            ]);}
        }
    }
}
