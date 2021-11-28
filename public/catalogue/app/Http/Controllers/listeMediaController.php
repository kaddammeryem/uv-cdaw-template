<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use DB;

class listeMediaController extends Controller
{
    public function getListeMedias() {
        
        $films = Media::where('type',"film")->get();
        $series = Media::where('type',"serie")->get();
        return view('homedisc',['films'=> $films,'series'=>$series]);
    }
    public function getListeMediasCo() {
        $films = Media::where('type',"film")->get();
        $series = Media::where('type',"serie")->get();
        return view('homeco',['films'=> $films,'series'=>$series]);
    }
    public function getHistory() {
        
        $result = DB::table('history')
        ->selectRaw('date,title,runtimeStr,year,descr,image')
        ->join('medias', 'medias.id', '=', 'history.id_media')
        ->where('id_user', 15)
        ->orderBy('date')
        ->get();
        $result2 = DB::table('history')
        ->selectRaw('date')
        ->distinct()
        ->join('medias', 'medias.id', '=', 'history.id_media')
        ->where('id_user', 15)
        ->orderBy('date')
        ->get();
        return view('historique',['films'=> $result,'date'=>$result2]);
    }
    /*
    public function addFilm(Request $request){
        $name=$request->input('nom');
        $cat1=$request->input('cat1');
        $directeur=$request->input('directeur');
        $path=$request->input('path');
        $data=[
            'name'=>$name,
            'categorie_id'=>$cat1,
            'director'=>$directeur,
            'path'=>$path,
        ];
       Film::create($data);
       $films = Film::all();
        return redirect()->route('tableau')->with('info','Le film a été bien ajouté');
    }
    public function destroy(int $film){
        $asup=Film::where('id',$film)->delete();
        return redirect()->route('tableau')->with('info','Le film a été bien supprimé');
    }
    public function getFilmById(Film $film){
        $infos=Film::where('id',$film->id)->first();
        return view('infos',['infos'=> $film]);
    }
    public function updateFilm(int $id,Request $request){
        $name=$request->input('nom');
        $cat1=$request->input('cat1');
        $directeur=$request->input('directeur');
        $path=$request->input('path');
        Film::where('id', $id)->update(
            ['name' => $name,
            'categorie_id'=>$cat1,
            'path'=>$path,
            'director'=>$directeur           
            ]
        );
        $films = Film::all();
        return redirect()->route('tableau')->with('info','Le film a été bien modifié');*/
   // }
}
