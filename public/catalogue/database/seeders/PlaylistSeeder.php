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
        $medias = Media::all();
        $users = User::all();
        for($i=0;$i<10;$i=$i+1){
            $name=Str::random(6);
            $user=$users[$i];
            for($j=0;$j<3;$j=$j+1){
                DB::table('playlist')->insert([
                'nameplaylist'=> $name,
                'id_media'=>rand(11,30),
                'email'=>$user->email,

            ]);}
        }
        
            
           
    }
}
