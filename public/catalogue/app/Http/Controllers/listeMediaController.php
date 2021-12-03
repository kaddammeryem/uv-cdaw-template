<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Favorites;
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
        ->selectRaw('date,title,runtimeStr,year,description,image')
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
    public function getListeFavorites() {
        $films = DB::table('favorites')
        ->selectRaw('title,image,runtimeStr,description')
        ->join('medias', 'medias.id', '=', 'favorites.id_media')
        ->where('id_user', 8)
        ->get();
        return view('favorite',['films'=> $films]);
    }
    public function getListePlaylist() {
        $films = DB::table('playlist')
        ->selectRaw('namePlaylist,image')
        ->join('medias', 'medias.id', '=', 'playlist.id_media')
        ->where('id_user', 8)
        ->get();
        return view('playlist',['films'=> $films]);
    }
    public function getDetails(Media $id) {
        $film = DB::table('medias')
        ->selectRaw('title,genres,year,nom,prenom,fonction,image,description')
        ->join('participation', 'participation.id_media', '=', 'medias.id')
        ->join('participants', 'participants.id', '=', 'participation.id_participant')
        ->where('id_media', $id->id)
        ->get();

        $comments= DB::table('comments')
        ->where('id_media', $id->id)
        ->join('users', 'users.id', '=', 'comments.id_user')
        ->get();
        return view('details',['film'=>$film,'comments'=>$comments]);
    }
    public function getPlaylistDetails() {
        $films = DB::table('playlist')
        ->join('medias','medias.id' ,'=','playlist.id_media')
        ->where('id_media', 11)
        ->where('id_user', 5)
        ->get();

     
        return view('playlistDetails',['films'=> $films]);
    }
    
}
