<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class serieseeder extends Seeder
{
    public function run()
    {
        //SERIES
        $url = 'https://imdb-api.com/en/API/Top250TVs/k_3rh7vw00';
            $options = array(
                'https' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($url);
            $obj = json_decode($result,true,512,JSON_OBJECT_AS_ARRAY); 
            $data = $obj['items'];
            for($i = 0;$i < 10;$i = $i+1){
            $id = $data[$i]['id'];
                $url = 'https://imdb-api.com/en/API/Title/k_3rh7vw00/'.$id;
                $options = array(
                    'https' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'GET',
                    )
                );
                $context  = stream_context_create($options);
                $result = file_get_contents($url);
                $series = json_decode($result2,true,512,JSON_OBJECT_AS_ARRAY);
                DB::table('series')->insert([
                    'title' => $series['title'],
                    'image' => $series['image'],
                    'type' => 'serie',
                    'genres' => $series['genres'],
                    'year' => $series['year'],
                    'runtimeStr' => $series['runtimeStr'],
                    'description' => $series['plot'],
            ]);
        }

           //MOVIES

           $url = 'https://imdb-api.com/en/API/Top250Movies/k_3rh7vw00';
            $options = array(
                'https' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($url);
            $obj2=json_decode($result,true,512,JSON_OBJECT_AS_ARRAY); 
            $data=$obj2['items'];
            for($i=0;$i<10;$i=$i+1){
                $id=$data[$i]['id'];
                $url = 'https://imdb-api.com/en/API/Title/k_3rh7vw00/'.$id;
                $options = array(
                    'https' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'GET',
                    )
                );
                $context  = stream_context_create($options);
                $result = file_get_contents($url);
                $movies=json_decode($result2,true,512,JSON_OBJECT_AS_ARRAY);
                DB::table('series')->insert([
                'title' => $movies['title'],
                'image' => $movies['image'],
                'type' => 'serie',
                'genres' => $movies['genres'],
                'year' => $movies['year'],
                'runtimeStr' => $movies['runtimeStr'],
                'description' => $movies['plot'],
           ]);
        }

         
    }
}
