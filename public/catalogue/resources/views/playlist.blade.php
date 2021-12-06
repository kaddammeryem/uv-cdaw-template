@extends('layouts.header')
@section('title', 'Playlist')
<html>
    @section('head')
        @parent
        <link href="../../public/css/playlist.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    @endsection
    <body>
    @section('sidebar')
        @parent
    @endsection
    @section('content')
      <div class="container mx-auto mt-auto">
        <h1 style="color:white">Your Playlists</h1>
        <div class="row" id="oldP">
          @foreach($films as $film)
            <div class="col-md-auto" data-id="{{$film->id_playlist}}" >   
              <div class="card" style="width: 20rem;">
                @foreach($names as $name)
                  @if($name->namePlaylist==$film->namePlaylist)
                    <img src='{{$name->image}}' class="card-img-top" >
                    @break
                  @endif
                @endforeach
              <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
                <h5 class="card-title">{{$film->namePlaylist}}</h5>
                <div style="display:flex;flex-direction:row;justify-content:space-around;width:100%">
                  <button class="btn " onclick="window.location='{{route('mediaplaylist',['playlist'=>$film->id_playlist])}}'" id="more">
                    <i class="fas fa-info"></i>
                  </button>
                  <button class="btn " onclick="deletePlaylist({{$film->id_playlist}})" id="more">
                    <i class="fas fa-trash"></i>
                  </button>
              </div>
            </div> 
            </div>
        </div> 
        @endforeach   
      </div>
    @endsection
    @section('footer')
        @parent
    @endsection
    <script>
          "use strict";
          // ----------- Event handler of delete playlist
          function deletePlaylist(id){
            // We first select all the card containing playlist infos
            let card=document.getElementsByClassName('col-md-auto');
            console.log(card);
            for(let i=0;i<card.length;i++){
              // Then we select the one which dataset id is the the id of the film clicked (this is done in the foreach loop)
              if(card[i].dataset.id==id){
                // We delete it from the page and database without reloading the page
                card[i].remove();
                let route="{{route('delplaylist',['playlist'=>'val'])}}".replace('val',id);
                const response=fetch(route);
              }
            }
          }
    </script>
  </body>
</html>