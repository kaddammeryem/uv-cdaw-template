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
            for($j=0;$j<rand(1,3);$j=$j+1){
                DB::table('comments')->insert([
                'email'=> $user->email,
                'id_media'=>rand(11,30),
                'contenu'=>Str::random(10,20),
            ]);}
        }
    }
}
