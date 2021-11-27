<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Media;
class CommentsSeeder extends Seeder
{
    public function run()
    {
        $medias = Media::all();
        $users = User::all();
        for($i=0;$i<10;$i=$i+1){
            $user=$users[$i];
            for($j=0;$j<3;$j=$j+1){
                $int= rand(1622055681,1623059681);
                DB::table('comments')->insert([
                'email'=> $user->email,
                'id_media'=>rand(11,30),
                'contenu'=>Str::random(10,20),
                'date_comment'=>date("Y-m-d",$int),
            ]);}
        }
    }
}


