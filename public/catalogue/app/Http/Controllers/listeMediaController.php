<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Comments;
use App\Models\Favorites;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class listeMediaController extends Controller
{
    public function getListeMedias() {
        
        $films = Media::where('type',"film")->get();
        $series = Media::where('type',"serie")->get();
        return view('homedisc',['films'=> $films,'series'=>$series]);
    }
    public function getListeMediasCo() {
        $id=Auth::id();
        $films = Media::where('type',"film")->get();
        $series = Media::where('type',"serie")->get();
        $favorites = Favorites::where('id_user',$id)->get('id_media');
        $history =History::where('id_user',$id)->get('id_media');
        return view('homeco',['films'=> $films,'series'=>$series,'favorites'=>$favorites,'history'=>$history]);
    }
    public function addFav(Media $film) {
        $id=Auth::id();
        DB::table('favorites')->insert([
            'id_media'=>$film->id,
            'id_user'=>$id,
    ]);}
    public function delfav(Media $film) {
        $id=Auth::id();
        $favorites = Favorites::where('id_user',$id)
        ->where('id_media',$film->id)
        ->delete();
        print_r($favorites);
    }
    public function addHistory(Media $film) {
        $id=Auth::id();

        DB::table('history')->insert([
            'id_media'=>$film->id,
            'id_user'=>$id,
            'date'=>date("Y-m-d"),
    ]);}
    public function delHistory(Media $film) {
        $id=Auth::id();
        $history = History::where('id_user',$id)
        ->where('id_media',$film->id)
        ->delete();
        print_r($favorites);
    }
    public function addComment(string $contenu,int $film) {
        $id=Auth::id();
        DB::table('comments')->insert([
            'id_media'=>$film,
            'id_user'=>$id,
            'contenu'=>$contenu,
            'date_comment'=>date("Y-m-d"),
    ]);}
    
    public function delComment(Media $film) {
        $id=Auth::id();
        $comments = Comments::where('id_user',$id)
        ->where('id_media',$film->id)
        ->delete();
    }
    public function getHistory() {
        $id=Auth::id();
         // join between history and favs to return only fav in history
        $fav = DB::table('favorites')
        ->selectRaw('id,title,image,runtimeStr,description')
        ->join('medias', 'medias.id', '=', 'favorites.id_media')
        ->join('history', 'history.id_media', '=', 'favorites.id_media')
        ->distinct()
        ->where('history.id_user', $id)
        ->get();
       
        $result = DB::table('history')
            ->selectRaw('id,date,title,runtimeStr,year,description,image')
            ->join('medias', 'medias.id', '=', 'history.id_media')
            ->where('id_user', $id)
            ->orderBy('date')
            ->get();
        $result2 = DB::table('history')
            ->selectRaw('date')
            ->distinct()
            ->join('medias', 'medias.id', '=', 'history.id_media')
            ->where('id_user', $id)
            ->orderBy('date')
            ->get();
        return view('historique',['films'=> $result,'date'=>$result2,'favorites'=>$fav]);
    }
    public function getListeFavorites() {
        $id=Auth::id();
        $films = DB::table('favorites')
        ->selectRaw('id_media,title,image,runtimeStr,description')
        ->join('medias', 'medias.id', '=', 'favorites.id_media')
        ->where('id_user', $id)
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
        ->selectRaw('id_media,title,genres,year,nom,prenom,fonction,image,description')
        ->join('participation', 'participation.id_media', '=', 'medias.id')
        ->join('participants', 'participants.id', '=', 'participation.id_participant')
        ->where('id_media', $id->id)
        ->get();
        $id_user=Auth::user()->where('id',Auth::id())->get();
        $comments= DB::table('comments')
        ->where('id_media', $id->id)
        ->join('users', 'users.id', '=', 'comments.id_user')
        ->get();
        return view('details',['film'=>$film,'comments'=>$comments,'user'=>$id_user]);
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
