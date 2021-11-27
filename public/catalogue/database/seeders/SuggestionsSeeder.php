<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Media;
class SuggestionsSeeder extends Seeder
{
    public function run()
    {
        for($i=0;$i<10;$i=$i+1){
            for($j=0;$j<rand(1,3);$j=$j+1){
                DB::table('suggestions')->insert([
                'id_media'=> rand(11,30),
                'id_similaire'=>rand(11,30),
            ]);}
        }
    }
}
