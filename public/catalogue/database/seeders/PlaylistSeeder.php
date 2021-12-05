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
        for($i=1;$i<11;$i=$i+1){
            $name=['playlist1','playlist2','playlist3','playlist4'];
            $id_playlist=rand(1,20);
            $id_name=rand(0,3);//2
            for($j=0;$j<3;$j=$j+1){
                DB::table('playlist')->insert([
                'nameplaylist'=> $name[$id_name],
                'id_media'=>rand(1,20),
                'id_playlist'=>$id_playlist,
                'id_user'=>$i,
            ]);}
        }
        
            
           
    }
}
