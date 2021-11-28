@extends('layouts.header')
@section('title', 'Home')
<html>
    @section('head')
        @parent
        <link href="../../public/css/homedisc.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    @endsection
    <body>
        @section('sidebar')
        @parent
        <?php $urlProfile = route('profile');?>
        <?php $urlHomeDisc = route('homedisc');?> 
        <?php $urlHistory = route('history');?>
        <?php $urlHomeCo = route('homeco');?>
       @endsection
       @section('sign')
       <div class='sign'>
            <button onclick="window.location= '{{ route('login') }}'" class="btn btn-outline-primary" style="color:white">Signin</button>
        </div>
       @endsection
       @section('content')
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
              
                @foreach($films as $film)
                <div style="margin:20px" >
                    <div  classe="image"> 
                       <img id='boutton'  src='{{$film->image}}'/>
                    </div>
                        <div class="infos">
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
                                <button type="button" id='details' class="btn" >
                                    <i class="fas fa-info"></i>
                                </button>
                                <button type="button" id='details' class="btn" >
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
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
                <div style="margin:20px" >
                    <div  classe="image"> 
                       <img id='boutton'  src='{{$film->image}}'/>
                    </div>
                        <div class="infos">
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
                                <button type="button" id='details' class="btn" >
                                    <i class="fas fa-info"></i>
                                </button>
                                <button type="button" id='details' class="btn" >
                                    <i class="fas fa-plus"></i>
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
        @section('home')
        <li><a href=<?php print_r($urlHomeDisc)?>>Home</a></li>
        @endsection
        @endsection
        <script>
            var b = document.getElementById("boutton");
            var c = document.getElementById("collapseOne");
            b.addEventListener("click", function( event ) {
                // on met l'accent sur la cible de mouseover
                console.log(b);
                console.log(c);
               var d= c.getAttribute('class');
                if(d=='collapse'){
                    c.setAttribute("class","collapse show");
                }
                else{
                    c.setAttribute("class","collapse");
                }
              
                console.log(c);
            c.getAttribute('class')})
        </script>
    </body>
</html>