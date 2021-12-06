@extends('layouts.header')
@section('title', 'History')
<html>
    @section('head')
        @parent
        <link href="../../public/css/historique.css" rel="stylesheet">
    @endsection
    <body>
        @section('sidebar')
            @parent
       @endsection
       @section('content')
        <div class="historique">
            @foreach($date as $d)
                <div style="width:50rem">
                    <div style="margin:10px;display:flex;align-self:flex-start">
                        <h4 style="color:white"> {{$d->date}}</h4>
                    </div>
                </div>
                @php
                $i=0;
                @endphp
                @foreach($films as $film)
                    @if($d->date==$film->date)
                    <div class="card shadow-lg bg-white rounded" data-id='{{$film->id}}'  onclick="window.location='{{route('details',[$film->id])}}'" style="width: 50rem;display:flex;flex-direction:row;margin:10px">
                        <img class="card-img-top" src="{{$film->image}}" alt="Card image cap">
                        <div class="card-body">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <h2 class="card-title">{{$film->title}}</h2>
                            </div>  
                            <p><i class="fas fa-clock"></i><span style="margin-left:5">{{$film->runtimeStr}}</span></p>
                            <p class="card-text">{{$film->description}}</p>
                            <p style="font-weight:bold">Release year: </p>
                            <p style="margin-left:20px"> {{$film->year}} </p>
                            <hr>
                            <div class='detadd'>
                                        <button class="btn" onclick="changeToNotSeen({{$film->id}})">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                @if($favorites->count()==0)
                                    <button class="likeBtn btn" onclick="like({{$film->id}})">
                                        <i id= "{{$film->id}}" class="far fa-heart"></i>
                                    </button>
                                @elseif($i<$favorites->count())
                                    @if($favorites[$i]->id==$film->id)
                                        <button class="likeBtn btn" onclick="like({{$film->id}})">
                                            <i  id= "{{$film->id}}" class="fas fa-heart"></i>
                                        </button>
                                        @php
                                            $i=$i+1;
                                        @endphp
                                    @else
                                        <button class="likeBtn btn" onclick="like({{$film->id}})">
                                            <i  id= "{{$film->id}}" class="far fa-heart"></i>
                                        </button>
                                    @endif
                                @else
                                <button class="likeBtn btn" onclick="like({{$film->id}})">
                                        <i  id= "{{$film->id}}" class="far fa-heart"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>
        @endsection
        @section('footer')
        @parent
        @endsection
        <script>
            "use strict";

            //-------------- Event Handler of like ---------------
            // Same as in homeco
            function like(id)
            {
                event.stopPropagation(); 
                let i=document.getElementById(id);
                if(i.className == 'far fa-heart'){
                    i.className = 'fas fa-heart';
                    let route="{{route('addfav',['film'=>'id'])}}".replace('id',id);
                    const response=fetch(route);
                    console.log(response);
                } 
                else {
                    i.className = 'far fa-heart';
                    let route="{{route('delfav',['film'=>'id'])}}".replace('id',id);
                    console.log(route);
                    const response=fetch(route);
                    console.log(response);
                }
            }
            //-------------- Event Handler of Seen ---------------
            // Same as in homeco
            function changeToNotSeen(id)
            {
                event.stopPropagation(); 
                let i=document.getElementsByClassName('card');   
                for(let j=0;j<i.length;j++){
                    if(i[j].dataset.id==id){
                        i[j].remove();
                        let route="{{route('delhistory',['film'=>'id'])}}".replace('id',id);
                         const response=fetch(route);
                        break;
                    }
                }
            }
                
        </script>
    </body>
    </html>