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
        for($i=1;$i<11;$i=$i+1){
            for($j=0;$j<3;$j=$j+1){
                DB::table('favorites')->insert([
                    'id_media'=>rand(1,20),
                    'id_user'=>$i,
            ]);}
        }
    }
}
