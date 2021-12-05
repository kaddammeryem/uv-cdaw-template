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
      <div class="container mx-auto mt-auto">
        <h1 style="color:white">Your Playlists</h1>
      <div class="row" id="oldP">
        @foreach($films as $film)
          <div class="col-md-auto" >   
            <div class="card" style="width: 20rem;">
              <img src='{{$film->image}}' class="card-img-top" >
            <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
              <h5 class="card-title">{{$film->namePlaylist}}</h5>
              <button class="btn btn-outline" id="more">More</button>
            </div> 
          </div>
      </div>
        @endforeach   
          
      </div>
    @endsection
    @section('footer')
        @parent
        @section('home')
          <li><a href=<?php print_r($urlHomeDisc)?>>Home</a></li>
        @endsection
    @endsection
    <script>
       

    </script>
  </body>
</html>