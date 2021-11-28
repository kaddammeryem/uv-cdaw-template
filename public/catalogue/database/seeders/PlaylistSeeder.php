<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Media;
class PlaylistSeeder extends Seeder
{
    public function run()
    {
        for($i=13;$i<23;$i=$i+1){
            $name=Str::random(6);
            for($j=0;$j<3;$j=$j+1){
                DB::table('playlist')->insert([
                'nameplaylist'=> $name,
                'id_media'=>rand(11,30),
                'id_user'=>$i,
            ]);}
        }
        
            
           
    }
}
