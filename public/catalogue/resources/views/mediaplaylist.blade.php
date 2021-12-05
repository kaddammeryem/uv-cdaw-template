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
        <?php $urlProfile = route('profile');?>
        <?php $urlHomeDisc = route('homedisc');?> 
        <?php $urlHistory = route('history');?>
        <?php $urlHomeCo = route('homeco');?>
        @section('history')
        <div class="history">
            <button class="btn btn-link" id='in' type="submit" onclick="window.location= '{{ route('history') }}'">
                <span style="color:white">History</span>
            </button>
            <button class="btn btn-link" id='in' type="submit">
                <span style="color:white">Playlist</span>
            </button>
        </div> 
        @endsection
        @section('sign')
        <div class='sign'>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown" style=" list-style-type: none">
                    <button class="btn btn-outline-primary " style="color:white" id='in'   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user" style="color: white;"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href=<?php print_r($urlProfile)?>>Profile</a>
                        <hr>
                        <a class="dropdown-item" href=<?php print_r($urlHomeDisc)?>>Log out</a>
                    </div>
                </li>
            </ul>
        </div>
        @endsection
        @endsection
        @section('content')
        <div class="historique">
            @foreach($name as $n)
                <div style="width:50rem">
                    <div style="margin:10px;display:flex;align-self:flex-start">
                        <h4 style="color:white"> {{$n->namePLaylist}}</h4>
                    </div>
                     @foreach($films as $film)
                        @if($n->namePLaylist==$film->namePlaylist)
                            <div class="card shadow-lg bg-white rounded" data-id="{{$film->id}}" style="width: 50rem;display:flex;flex-direction:row;margin:10px">
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
                                        <button  class="btn"   onclick="window.location='{{route('details',[$film->id])}}'" >
                                            <i class="fas fa-info" style="color:black"></i>
                                        </button>
                                        <button  class="btn ">
                                            <i class="fa fa-trash" onclick="deletePlay({{$film->id}},{{$film->id_playlist}})" style="color:black"></i>
                                        </button>    
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div> 
            @endforeach
        </div>
        @endsection
        @section('footer')
        @parent
        @section('home')
        <li><a href=<?php print_r($urlHomeCo)?>>Home</a></li>
        @endsection
        @endsection
        <script>
            function deletePlay(id_playlist,id){
            let card=document.getElementsByClassName('card');
            console.log(card);
            for(let i=0;i<card.length;i++){
                if(card[i].dataset.id=id){
                    card[i].remove();
                    let route="{{route('delfromplaylist',['playlist'=>'val','film'=>'val2'])}}".replace('val',id);
                    route=route.replace('val2',id_playlist)
                    const response=fetch(route);

                }
            }}
           

    
        </script>
</html>