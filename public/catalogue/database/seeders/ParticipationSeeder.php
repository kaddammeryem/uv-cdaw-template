<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Media;
class ParticipationSeeder extends Seeder
{
    public function run()
    {
        for($i=0;$i<10;$i=$i+1){
            for($j=0;$j<rand(1,3);$j=$j+1){
                DB::table('participation')->insert([
                'id_participant'=> rand(1,30),
                'id_media'=>rand(1,20),
            ]);}
        }
    }
}
