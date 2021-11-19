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
  
    
    //
}
