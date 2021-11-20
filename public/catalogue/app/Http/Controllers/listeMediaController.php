<?php

namespace App\Http\Controllers;
use App\Models\Film;
use Illuminate\Http\Request;

class listeMediaController extends Controller
{
    public function getListeMedias() {
        $films = Film::all();
        return view('tableau',['films'=> $films]);
    }
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
        print_r($data);
      // Film::create($data);
       //$films = Film::all();
       // return redirect()->route('tableau')->with('info','Le film a été bien ajouté');
        

    }
    public function destroy(int $film){
        $asup=Film::where('id',$film)->delete();
        return redirect()->route('tableau')->with('info','Le film a été bien supprimé');
    }
    public function getFilmById(Film $film){
        $infos=Film::where('id',$film->id)->first();
        return view('infos',['infos'=> $film]);
    }
    public function updateFilm(int $film){
        print_r('hey');
    }
    /*
$film=new Film();
        $film->name=$request->input('nom');
        $film->cat1=$request->input('cat1');
        $film->directeur=$request->input('directeur');
        $film->path=$request->input('path');
        /*$data=[
            'name'=>$name,
            'categorie_id'=>$cat1,
            'director'=>$directeur,
            'path'=>$path,
        ];*/
       // $film->save();


    
  
    
    //
}
