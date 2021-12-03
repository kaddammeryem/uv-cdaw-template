<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MediaSeeder extends Seeder
{
    public function run()
    {
        $url = 'https://imdb-api.com/en/API/Top250TVs/k_3rh7vw00';
            $options = array(
                'https' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($url);
            $obj=json_decode($result,true,512,JSON_OBJECT_AS_ARRAY); 
            $data=$obj['items'];
            for($i=0;$i<10;$i=$i+1){
            $id=$data[$i]['id'];
            $url2 = 'https://imdb-api.com/en/API/Title/k_3rh7vw00/'.$id;
            $options2 = array(
                'https' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                )
            );
            $context2  = stream_context_create($options2);
            $result2 = file_get_contents($url2);
            $obj2=json_decode($result2,true,512,JSON_OBJECT_AS_ARRAY);
            DB::table('medias')->insert([
            'title' => $obj2['title'],
            'image' => $obj2['image'],
            'type' => 'serie',
            'genres' => $obj2['genres'],
            'year' => $obj2['year'],
            'runtimeStr' => $obj2['runtimeStr'],
            'description' => $obj2['plot'],
           ]);}
    }
}
