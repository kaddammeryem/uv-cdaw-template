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
    // --------- Filter function ---------
    public function Search(Request $request) {
        $id=Auth::id();
        $favorites = Favorites::where('id_user',$id)->get('id_media');
        $history =History::where('id_user',$id)->get('id_media');
        $playlists =Playlist::where('id_user',$id)->get();

        // We retrieve the input search containing the value of the filter
        // If it is null then we have 3 cases : 
        if($request->input('search')==null){
            // We retrieve the input critere that is hidden and only made to store the filter criteria 
            if($request->input('critere')=="movies"){
                // In case it is equal to movies we send all the movies
                // Since the page medias implements favorites, history and playlists, we send them too to the view
                $films = Media::where('type',"film")->get();
                return view('medias',['films'=> $films,'favorites'=>$favorites,'history'=>$history,'playlists'=>$playlists]);
            }
            if($request->input('critere')=="series"){
                 // In case it is equal to movies we send all the series
                $films = Media::where('type',"serie")
                ->get();
                return view('medias',['films'=> $films,'favorites'=>$favorites,'history'=>$history,'playlists'=>$playlists]);
            }
             // If any of the cases before, then the input critere is null and we mean by that that we want all the medias
            else{
                $films = Media::all();
                return view('medias',['films'=> $films,'favorites'=>$favorites,'history'=>$history,'playlists'=>$playlists]);
            }
        }
         // Now if the input search is not null, wich means we have a value of the filter
        // Then we have 3 values possible :
        else{
            // If it is actor, then we join participation and participants to get infos about the actor searched 
            // then we join it with medias to get infos about the movies where the actor played
            if($request->input('critere')=="actor"){
                $films = DB::table('participation')
                ->selectRaw('medias.id,id_participant,nom,title,runtimeStr,image,genres')
                ->join('participants', 'participants.id', '=', 'participation.id_participant')
                ->join('medias', 'medias.id', '=', 'participation.id_media')
                ->where('nom', $request->input('search'))
                ->get();
                return view('medias',['films'=> $films,'favorites'=>$favorites,'history'=>$history,'playlists'=>$playlists]);
            }
            //if it is title then we return the film matching the title desired
            if($request->input('critere')=="title"){
                $films = Media::where('title',$request->input('search'))->get();
                return view('medias',['films'=> $films,'favorites'=>$favorites,'history'=>$history,'playlists'=>$playlists]);
            }
            //if it is genres then we return the films matching the genres desired
            if($request->input('critere')=="genre"){
                $films = Media::where('genres',$request->input('search'))->get();
                return view('medias',['films'=> $films,'favorites'=>$favorites,'history'=>$history,'playlists'=>$playlists]);
            }
        }
    }

    //-------------------- Infos user (profile page)  ------------
    public function getUserInfos() {
        $id=Auth::id();
        $user=User::where('id',$id)->get();
        return view('profile',['user'=>$user]); 
    }

    //------------------ Update image user  ---------
    public function updateImage(string $imageurl) {
        $id=Auth::id();
        $user=User::where('id',$id)->get();
        //imageurl is the name of the file and url is the path to the file localy;
        $url="http://localhost:8080/catalogue/public/image/".$imageurl;
        DB::update('update users set profile_photo_path=? where id=?',
        [$url,$id]);
    }

    //------------ Update User Infos -------------
    public function updateUser(Request $request) {
        $id=Auth::id();
        $user=User::where('id',$id)->get();
        /* 
        We start by verifying if the user wants to change his password, if the password field is empty, then it is not the case
        In that case, we only modify the other fields by retrieveng values in each input
        If he doesn't want to change of them, it will just restore the old value*/
        if($request->password==''){
            DB::update('update users set nom=?,prenom=?,email=?,phone=?,naissance=?,quote=? where id=?',
            [$request->lastname,$request->firstname,$request->email,$request->phone,$request->birthday,$request->quote,$id]);
        }
        else{
            /* If the user wants to change the password, then we make some verifications
            First, the password and confirmation password shoul match
            Second, the length of the new password should be more than 8
            */
            $validator=Validator::make($request->all(),
            [
                'password'=>'min:8',
                'password_confirmation'=>'same:password|required_with:password',
            ]
            );
            // If these requirements are not met, the we return an error
            if($validator->fails()){
                return back()->withErrors($validator);
            }
            // Else we hash the password and then we store all the values of the fields
            $password=Hash::make($request->password);
            DB::update('update users set nom=?,prenom=?,email=?,phone=?,naissance=?,quote=?,password=? where id=?',
            [$request->lastname,$request->firstname,$request->email,$request->phone,$request->birthday,
            $request->quote,$password,$id]);
        }
        // Finally we go back to the page with updated infos
        return redirect()->route('profile',['user'=>$user]);   
    }

    // ---------------------- Playlist view ----------------
    public function getPlaylistMedia(int $playlist) {
        $id=Auth::id();
        // We Select all the films contained in the playlist identified by $playlist
        $films = DB::table('playlist')
        ->selectRaw('namePlaylist,image,id_media,title,year,description,runtimeStr,id_playlist')
        ->join('medias', 'medias.id', '=', 'playlist.id_media')
        ->where('id_user', $id)
        ->where('id_playlist', $playlist)
        ->get();
        return view('mediaplaylist',['films'=> $films]);
    }

    //------------- Home connected view ------------
    public function getListeMediasCo() {
        $id=Auth::id();
        $films = Media::where('type',"film")->get();
        $series = Media::where('type',"serie")->get();
        $favorites = Favorites::where('id_user',$id)->get('id_media');
        $history =History::where('id_user',$id)->get('id_media');
        $playlists =Playlist::where('id_user',$id)->get();
        return view('homeco',['films'=> $films,'series'=>$series,'favorites'=>$favorites,'history'=>$history,
                    'playlists'=>$playlists]);
    }

    //------------------ Add Favorite -----------------
    public function addFav(Media $film) {
        $id=Auth::id();
        DB::table('favorites')->insert([
            'id_media'=>$film->id,
            'id_user'=>$id,
        ]);
    }

    //------------------ Delete Favorite -----------------
    public function delFav(Media $film) {
        $id=Auth::id();
        $favorites = Favorites::where('id_user',$id)
        ->where('id_media',$film->id)
        ->delete();
    }

    //------------------ Add a film to history -----------------
    public function addHistory(Media $film) {
        $id=Auth::id();
        DB::table('history')->insert([
            'id_media'=>$film->id,
            'id_user'=>$id,
            'date'=>date("Y-m-d"),
        ]);
    }

    //------------------ Delete a film from history -----------------
    public function delHistory(Media $film) {
        $id=Auth::id();
        $history = History::where('id_user',$id)
        ->where('id_media',$film->id)
        ->delete();
    }

    // ------------------ Delete playlist -----------------
    public function delPlaylist(int $playlist) {
        $id=Auth::id();
        $playlist = Playlist::where('id_user',$id)
        ->where('id_playlist',$playlist)
        ->delete();
    }

    //------------------ Delete a film from playlist -----------------
    public function delFromPlaylist(int $playlist,int $film) {
        $id=Auth::id();
        $play= Playlist::where('id_user',$id)
        ->where('id_playlist',$playlist)
        ->where('id_media',$film)
        ->delete();
    }

    //------------------ Add a comment -----------------
    public function addComment(string $contenu,int $film) {
        $id=Auth::id();
        DB::table('comments')->insert([
            'id_media'=>$film,
            'id_user'=>$id,
            'contenu'=>$contenu,
            'date_comment'=>date("Y-m-d"),
        ]);
    }

     //------------------ Delete my comment -----------------
    public function delComment(Media $film) {
        $id=Auth::id();
        $comments = Comments::where('id_user',$id)
        ->where('id_media',$film->id)
        ->delete();
    }

     //------------------ Add a film to playlist -----------------
    public function addToPlaylist(int $playlist,int $film) {
        $id=Auth::id();
        $namePlaylist = PLaylist::where('id_playlist',$playlist)
        ->get();
        DB::table('playlist')->insert([
            'id_media'=>$film,
            'id_user'=>$id,
            'id_playlist'=>$playlist,
            'namePLaylist'=>$namePlaylist[0]->namePlaylist
        ]);
    }

     //------------------ Add a playlist containing a film -----------------
    public function addPlaylist(string $name,int $film) {
        $id=Auth::id();
        $id_playlist = PLaylist::all();
        DB::table('playlist')->insert([
            'id_playlist'=>$id_playlist->count()+1,
            'id_media'=>$film,
            'id_user'=>$id,
            'namePlaylist'=>$name,
        ]);
    }

     //------------------ History view -----------------
    public function getHistory() {
        $id=Auth::id();
        /* The functionality of adding or deleting a film from favorites 
        is implemented in this view, that's why we return favorites*/
        $fav = DB::table('favorites')
        ->selectRaw('id,title,image,runtimeStr,description')
        ->join('medias', 'medias.id', '=', 'favorites.id_media')
        ->join('history','history.id_media','=', 'favorites.id_media')
        ->distinct()
        ->where('favorites.id_user', $id)
        ->where('history.id_user', $id)
        ->get('title');
        // Here we retrieve all the history then we order it by date
        $films = DB::table('history')
            ->selectRaw('id,date,title,runtimeStr,year,description,image')
            ->join('medias', 'medias.id', '=', 'history.id_media')
            ->where('id_user', $id)
            ->orderBy('date')
            ->get();
        /* Here we only take the dates but distinct , so that in the view, we display the films by date 
         We do that by doing a loop on dates and if the film'date matches the date iterator, 
        then we display it in the div reserved for that date (see view )*/
        $dates = DB::table('history')
            ->selectRaw('date')
            ->distinct()
            ->join('medias', 'medias.id', '=', 'history.id_media')
            ->where('id_user', $id)
            ->orderBy('date')
            ->get();
        return view('historique',['films'=> $films,'date'=>$dates,'favorites'=>$fav]);
    }

    //------------------ Favorites view ----------------------
    public function getListeFavorites() {
        $id=Auth::id();
        $films = DB::table('favorites')
        ->selectRaw('id_media,title,image,runtimeStr,description')
        ->join('medias', 'medias.id', '=', 'favorites.id_media')
        ->where('id_user', $id)
        ->get();
        return view('favorite',['films'=> $films]);
    }

     //------------------ Favorites view ----------------------
    public function getListePlaylist() {
        /*Here we return the playlists, but for the same playlist we only show it once in the view, 
        that's why we return the nameplaylists too to reimplement the same behviour we did for history (see view) */
        $id=Auth::id();
        $films = DB::table('playlist')
        ->selectRaw('namePlaylist,id_playlist')
        ->join('medias', 'medias.id', '=', 'playlist.id_media')
        ->where('id_user', $id)
        ->groupBy('namePlaylist')
        ->groupBy('id_playlist')
        ->get();

        $namePlaylist = DB::table('playlist')
        ->selectRaw('namePlaylist,image')
        ->join('medias', 'medias.id', '=', 'playlist.id_media')
        ->where('id_user', $id)
        ->groupBy('namePlaylist')
        ->groupBy('image')
        ->get();
        return view('playlist',['films'=> $films,'names'=>$namePlaylist]);
    }

    // ------------------------ Details view ------------------
    public function getDetails(Media $id) {
        $film = DB::table('medias')
        ->selectRaw('id_media,title,genres,year,nom,prenom,fonction,image,description,runtimeStr')
        ->join('participation', 'participation.id_media', '=', 'medias.id')
        ->join('participants', 'participants.id', '=', 'participation.id_participant')
        ->where('id_media', $id->id)
        ->get();
        $id_user=Auth::user()->where('id',Auth::id())->get();
        // Here we get comments of the film
        $comments= DB::table('comments')
        ->where('id_media', $id->id)
        ->join('users', 'users.id', '=', 'comments.id_user')
        ->get();
        return view('details',['film'=>$film,'comments'=>$comments,'user'=>$id_user]);

    }

   
    
}
