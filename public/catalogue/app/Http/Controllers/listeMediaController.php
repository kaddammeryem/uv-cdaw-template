<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use App\Models\Comments;
use App\Models\Favorites;
use App\Models\History;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DB;

class listeMediaController extends Controller
{
    public function getListeMedias() {
        
        $films = Media::where('type',"film")->get();
        $series = Media::where('type',"serie")->get();
        return view('homedisc',['films'=> $films,'series'=>$series]);
    }

    public function getUserInfos() {
        $id=Auth::id();
        $user=User::where('id',$id)->get();
        
      
        return view('profile',['user'=>$user]);
        
    }
    public function updateUser(Request $request) {
        $id=Auth::id();
        $user=User::where('id',$id)->get();
        if($request->password==''){
            DB::update('update users set nom=?,prenom=?,email=?,phone=?,naissance=?,quote=? where id=?',
            [$request->lastname,$request->firstname,$request->email,$request->phone,$request->birthday,$request->quote,$id]);
        }
        else{
            $validator=Validator::make($request->all(),
            [
                'password'=>'min:8',
                'password_confirmation'=>'same:password|required_with:password',
            ]
            );
            if($validator->fails()){
                return back()->withErrors($validator);
            }
        $password=Hash::make($request->password);
        DB::update('update users set nom=?,prenom=?,email=?,phone=?,naissance=?,quote=?,password=? where id=?',
        [$request->lastname,$request->firstname,$request->email,$request->phone,$request->birthday,$request->quote,$password,$id]);}

        return redirect()->route('profile',['user'=>$user]);
       
    }

    public function getPlaylistMedia(int $playlist) {
        $id=Auth::id();
        $films = DB::table('playlist')
        ->selectRaw('namePlaylist,image,id,title,year,description,runtimeStr,id_playlist')
        ->join('medias', 'medias.id', '=', 'playlist.id_media')
        ->where('id_user', $id)
        ->where('id_playlist', $playlist)
        ->get();
        $result2 = DB::table('playlist')
        ->selectRaw('namePLaylist')
        ->distinct()
        ->join('medias', 'medias.id', '=', 'playlist.id_media')
        ->where('id_user', $id)
        ->where('id_playlist', $playlist)
        ->get();
        return view('mediaplaylist',['films'=> $films,'name'=>$result2]);
    }
    public function getListeMediasCo() {
        $id=Auth::id();
        $films = Media::where('type',"film")->get();
        $series = Media::where('type',"serie")->get();
        $favorites = Favorites::where('id_user',$id)->get('id_media');
        $history =History::where('id_user',$id)->get('id_media');
        $playlists =Playlist::where('id_user',$id)->get();
        return view('homeco',['films'=> $films,'series'=>$series,'favorites'=>$favorites,'history'=>$history,'playlists'=>$playlists]);
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
    public function delPlaylist(int $playlist) {
        $id=Auth::id();
        $playlist = Playlist::where('id_user',$id)
        ->where('id_playlist',$playlist)
        ->delete();
    }
    public function delFromPlaylist(int $playlist,int $film) {
        $id=Auth::id();
        $play= Playlist::where('id_user',$id)
        ->where('id_playlist',$playlist)
        ->where('id_media',$film)
        ->delete();
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
    public function addToPlaylist(int $playlist,int $film) {
        $id=Auth::id();
        $namePlaylist = PLaylist::where('id_playlist',$playlist)
        ->get();
        DB::table('playlist')->insert([
            'id_media'=>$film,
            'id_user'=>$id,
            'id_playlist'=>$playlist,
            'namePLaylist'=>$namePlaylist[0]->namePlaylist
    ]);}
    public function addPlaylist(string $name,int $film) {
        $id=Auth::id();
        $id_playlist = PLaylist::all();
        print_r($id_playlist);
        DB::table('playlist')->insert([
            'id_playlist'=>$id_playlist->count()+1,
            'id_media'=>$film,
            'id_user'=>$id,
            'namePlaylist'=>$name,
    ]);}
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
        $id=Auth::id();
        $films = DB::table('playlist')
        ->selectRaw('namePlaylist,image,id,id_playlist')
        ->join('medias', 'medias.id', '=', 'playlist.id_media')
        ->where('id_user', $id)
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
