@extends('layouts.header')
@section('title', 'Details Playlist')
<html>
    @section('head')
        @parent
        <link href="../../css/historique.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    @endsection
    @section('sidebar')
        @parent
    @endsection
    @section('content')
        <div class="historique">
                <div style="width:50rem">
                    <div style="margin:10px;display:flex;align-self:flex-start">
                        <h4 style="color:white"> {{$films[0]->namePlaylist}}</h4>
                    </div>
                     @foreach($films as $film)
                            <div class="card shadow-lg bg-white rounded" data-id="{{$film->id_media}}" style="width: 50rem;display:flex;flex-direction:row;margin:10px">
                                <img class="card-img-top" src="{{$film->image}}" alt="Card image cap">
                                <div class="card-body">
                                    <div style="display:flex;flex-direction:row;justify-content:space-between">
                                        <h2 class="card-title">{{$film->title}}</h2>
                                    </div>  
                                    <p><i class="fas fa-clock"></i><span style="margin-left:5">{{$film->runtimeStr}}</span></p>
                                    <p class="card-text">{{$film->description}}</p>
                                    <p style="font-weight:bold">Release year:  </p>
                                    <p style="margin-left:20px"> {{$film->year}} </p>
                                    <hr>
                                    <div style="display: flex;flex-direction:row;justify-content:space-evenly">
                                        <button  class="btn"   onclick="window.location='{{route('details',[$film->id_media])}}'" >
                                            <i class="fas fa-info" style="color:black"></i>
                                        </button>
                                        <button  class="btn ">
                                            <i class="fa fa-trash" onclick="deleteFromPlaylist({{$film->id_media}},{{$film->id_playlist}})" style="color:black"></i>
                                        </button>    
                                    </div>
                                </div>
                            </div>
                      @endforeach
                </div> 
             </div>
        @endsection
        @section('footer')
        @parent
        <script>
            "use strict";
            // ----------- Event handler of delete film from playlist ------------
            function deleteFromPlaylist(id,id_playlist){
                // We select all the cards containing infos about the film
                let card=document.getElementsByClassName("card");
                for(let i=0;i<card.length;i++){
                    // Then we take the one with data set id equal to id as we give it this value in the foreach loop
                    if(card[i].dataset.id==id){
                        card[i].remove();
                        //We remove the one selected from the page and from the database without reloading the page
                        
                        let route="{{route('delfromplaylist',['playlist'=>'val','film'=>'idfilm'])}}".replace('idfilm',id);
                        route=route.replace('val',id_playlist)
                        const response=fetch(route);
                        break;
                        
                    }
                }
            }
        </script>
        @endsection
       
    </html>