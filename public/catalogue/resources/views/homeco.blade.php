@extends('layouts.header')
@section('title', 'Home')
<html>
    @section('head')
        @parent
        <link href="../../public/css/homeco.css" rel="stylesheet">
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
                        <a class="dropdown-item" href="#">Profile</a>
                        <hr>
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" value="Logout" class="dropdown-item"
                                        >
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                     </div>
                </li>
            </ul>
        </div>      
        @endsection
        
       @endsection
       @section('content')
       <div id="oldP">
        <div class="container">
            <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://images3.alphacoders.com/692/thumb-1920-692439.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Captain America: Civil War</p>
                            <p>********************</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images6.alphacoders.com/104/1041827.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <p >Carnival Row</p>
                            <p>********************</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images5.alphacoders.com/903/thumb-1920-903360.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Stranger Things</p>
                            <p>********************</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#carouselExample" type="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></i></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#carouselExample" type="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div>
        
        <div style="display: flex;justify-content:center;align-items:center;margin:10">
            <h1 style="color:white">
                Top Movies
            </h1>
        </div>
        <div class="container-fluid">
            <div class="scrolling-wrapper row flex-nowrap" >
                @php
                     $i = 0;
                     @endphp
                     @php
                     $j = 0;
                     @endphp
                @foreach($films as $film)
                <div style="margin:20px" >
                    <div  classe="image" onclick="window.location='{{route('details',[$film->id])}}'"> 
                       <img id='boutton'  src='{{$film->image}}'/>
                    </div>
                    <div class="infos" onclick="window.location='{{route('details',[$film->id])}}'">
                        <div>
                            <div>
                                <div>
                                    <div>
                                        <h3  style="margin-left:4">
                                            {{$film->title}} 
                                        </h3>
                                        <div>
                                            <div>
                                                <span  style="width: 88%"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <span >
                                                <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                <span style="margin-left:4">{{$film->runtimeStr}}  </span>
                                            </span>
                                        </div>
                                            
                                        <div>
                                            <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">{{$film->genres}}</span></label>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin:10">
                        <div class='detadd'>
                            <button type="button" onclick="plusFunction({{$film->id}})" data-id="{{$film->id}}" id='test' class="btn" >
                                <i class="fas fa-plus"></i>
                            </button>
                            @if($history->count()==0)
                                <button class="btn" onclick="seen({{$film->id}})">
                                    <i  id="{{$film->id}}" class="fas fa-eye-slash"></i>
                                </button>
                            @elseif($j<$history->count())
                                @if($history[$j]->id_media==$film->id)
                                    <button class="btn" onclick="seen({{$film->id}})">
                                        <i  id="{{$film->id}}" class="fas fa-eye"></i>
                                    </button>
                                    @php
                                        $j=$j+1;
                                    @endphp
                                @else
                                    <button class="btn" onclick="seen({{$film->id}})">
                                        <i  id="{{$film->id}}" class="fas fa-eye-slash"></i>
                                    </button>
                                @endif
                            @else
                                <button class="btn" onclick="seen({{$film->id}})">
                                    <i  id="{{$film->id}}" class="fas fa-eye-slash"></i>
                                    </button>
                                @endif
                               
                                @if($favorites->count()==0)
                                    <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                        <i   class="far fa-heart"></i>
                                    </button>

                                
                                @elseif($i<$favorites->count())
                                    @if($favorites[$i]->id_media==$film->id)
                                        <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                            <i  data-id="{{$film->id}}" class="fas fa-heart"></i>
                                        </button>
                                        @php
                                            $i=$i+1;
                                        @endphp
                                    @else
                                        <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                            <i  data-id="{{$film->id}}"  class="far fa-heart"></i>
                                        </button>
                                    @endif
                                @else
                                    <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                            <i  data-id="{{$film->id}}"  class="far fa-heart"></i>
                                    </button>
                            @endif     
                        </div>
                    </div>
                    <!--playlists here -->
                    <div  data-id="{{$film->id}}" data-etat="hidden" class="showArea" style="visibility:hidden">
                        @foreach($playlists->unique('id_playlist') as $playlist)
                            <button class="btn " onclick="addtoplaylist({{$playlist->id_playlist}},{{$film->id}})">{{$playlist->namePlaylist}}</button>
                        @endforeach
                        <button class="btn" type="button" style="border-top: solid" data-toggle="modal" data-target="#exampleModal" > <i class="fas fa-plus" ></i> New</button>
                    </div>
                    <div class="modal fade" id="exampleModal" style="d-flex justify-content:center " tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="background-color:#202020;opacity:0.98">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color:white">New Playlist</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color:white">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label" style="color:white">Playlist name:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="color:white" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn" style="color:white" onclick="addplaylist({{$film->id}})">Add playlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <!--playlists here -->
                 </div>

                
                @endforeach       
             </div>
             
        </div>
        <div style="display: flex;justify-content:center;align-items:center;margin:10">
            <h1 style="color:white">
                Top Series
            </h1>        
        </div>
        <div class="container-fluid">
            <div class="scrolling-wrapper row flex-nowrap" >
                   
                @foreach($series as $film)
                <div style="margin:20px" onclick="window.location='{{route('details',[$film->id])}}'" >
                    <div  classe="image"> 
                       <img id='boutton'  src='{{$film->image}}'/>
                    </div>
                        <div class="infos" onclick="window.location='{{route('details',[$film->id])}}'">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                {{$film->title}} 
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">{{$film->runtimeStr}}  </span>
                                                </span>
                                            </div>
                                            
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">{{$film->genres}}</span></label>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin:10">
                            <div class='detadd'>
                                <button type="button" onclick="plusFunction({{$film->id}})" data-id="{{$film->id}}" id='test' class="btn" >
                                        <i class="fas fa-plus"></i>
                                </button>
                                @if($history->count()==0)
                                    <button class="btn" onclick="seen({{$film->id}})" >
                                        <i  id="{{$film->id}}"  class="fas fa-eye-slash"></i>
                                    </button>
                                @elseif($j<$history->count())
                                    @if($history[$j]->id_media==$film->id)
                                        <button class="btn" onclick="seen({{$film->id}})">
                                            <i  id="{{$film->id}}"  class="fas fa-eye"></i>
                                        </button>
                                        @php
                                            $j=$j+1;
                                        @endphp
                                    @else
                                        <button class="btn" onclick="seen({{$film->id}})">
                                            <i  id="{{$film->id}}"  class="fas fa-eye-slash"></i>
                                        </button>
                                    @endif
                                @else
                                <button class="btn" onclick="seen({{$film->id}})">
                                        <i  id="{{$film->id}}"  class="fas fa-eye-slash"></i>
                                    </button>
                                @endif


                                @if($favorites->count()==0)
                                    <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                        <i  data-id= "{{$film->id}}" class="far fa-heart"></i>
                                    </button>
                                @elseif($i<$favorites->count())
                                    @if($favorites[$i]->id_media==$film->id)
                                        <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                            <i  data-id= "{{$film->id}}" class="fas fa-heart"></i>
                                        </button>
                                        @php
                                            $i=$i+1;
                                        @endphp
                                    @else
                                        <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                            <i  data-id= "{{$film->id}}" class="far fa-heart"></i>
                                        </button>
                                    @endif
                                @else
                                <button class="likeBtn btn" onclick="yes({{$film->id}})">
                                        <i  data-id= "{{$film->id}}" class="far fa-heart"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                        <div  data-id="{{$film->id}}" data-etat="hidden" class="showArea" style="visibility:hidden">
                        @foreach($playlists->unique('id_playlist') as $playlist)
                            <button class="btn " onclick="addtoplaylist({{$playlist->id_playlist}},{{$film->id}})">{{$playlist->namePlaylist}}</button>
                        @endforeach
                        <button class="btn" style="border-top: solid" > <i class="fas fa-plus" ></i> New</button>
                    </div>
                </div>  
                @endforeach       
             </div>
        </div> 
        </div>
        @endsection
        @section('footer')
        @parent
        @section('home')
        <li><a href=<?php print_r($urlHomeDisc)?>>Home</a></li>
        @endsection
        <script>
            
            function yes(id){
                event.stopPropagation(); 
                let modal=document.getElementsByClassName('showArea');
                let i=document.getElementsByClassName('likeBtn')[id-1].children;
                if(i[0].className == 'far fa-heart'){
                    i[0].className = 'fas fa-heart';
                    let route="{{route('addfav',['film'=>'id'])}}".replace('id',id);
                    const response=fetch(route);
                } 
                else {
                    i[0].className = 'far fa-heart';
                    let route="{{route('delfav',['film'=>'id'])}}".replace('id',id);
                    const response=fetch(route);
                }
                for(let i=0;i<20;i++){
                        modal[i].style="visibility:hidden";
                }
            }

            function seen(id){
                let modal=document.getElementsByClassName('showArea');
                event.stopPropagation();  
                let e=event.target
                i=document.getElementById(id); 
     
                if(i.className == 'fas fa-eye-slash'){
                    i.className = 'fas fa-eye';
                    let route="{{route('addhistory',['film'=>'id'])}}".replace('id',id);
                    const response=fetch(route);
                } 
                else {
                    i.className = 'fas fa-eye-slash';
                    let route="{{route('delhistory',['film'=>'id'])}}".replace('id',id);
                    const response=fetch(route);
                }
                for(let i=0;i<20;i++){
                        modal[i].style="visibility:hidden";
                }
            }
               
                
                
               
                function plusFunction(id){
                    event.stopPropagation();
                    let modal=document.getElementsByClassName('showArea');
                    for(let i=0;i<20;i++){
                      if(modal[i].dataset.id==id){
                        if(modal[i].dataset.etat=="hidden"){
                            modal[i].style="visibility:visible;display:flex;flex-direction:column;background-color:gray;max-height:90px;overflow:scroll;margin-left:20;width:100px";
                            modal[i].setAttribute('data-etat',"visible")
                        }
                        else{
                            modal[i].style="visibility:hidden";
                            modal[i].setAttribute('data-etat',"hidden")
                        }
                    }}
                }
                function addtoplaylist(id,id_film){
                    event.stopPropagation();
                    let modal=document.getElementsByClassName('showArea');
                    let route="{{route('addtoplaylist',['playlist'=>'id','film'=>'id_film'])}}".replace('id',id);
                    route=route.replace('id_film',id_film);
                    console.log(route);
                    const response=fetch(route);
                    for(let i=0;i<20;i++){
                        modal[i].style="visibility:hidden";
                }

                }

                let modal=document.getElementsByClassName('showArea');
                let oldP=document.getElementById('oldP')
                    oldP.onclick=function(event){
                        for(let i=0;i<20;i++){
                        modal[i].style="visibility:hidden";
                        }
                    }
                function addplaylist(id){
                    let input=document.getElementById('recipient-name').value;
                    let route="{{route('addplaylist',['name'=>'input','film'=>'id'])}}".replace('id',id);
                    route=route.replace('input',input);
                    console.log(route);
                    const response=fetch(route);
                    console.log(response);
                    window.location="{{route('homeco')}}";
                    
                }

                
              
                
        </script>
        @endsection
</html>