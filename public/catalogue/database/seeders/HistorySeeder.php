<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Media;
class HistorySeeder extends Seeder
{
    public function run()
    {
        $medias = Media::all();
        $users = User::all();
        for($i=0;$i<10;$i=$i+1){
            $int= rand(1622055681,1623059681);
            $user=$users[$i];
            for($j=0;$j<rand(1,3);$j=$j+1){
                $int= rand(1622055681,1623059681);
                DB::table('history')->insert([
                'email'=> $user->email,
                'id_media'=>rand(11,30),
                'date'=>date("Y-m-d",$int),
            ]);}
        }
    }
}
