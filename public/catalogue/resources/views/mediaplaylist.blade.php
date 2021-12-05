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
            
                <div style="width:50rem">
                    <div style="margin:10px;display:flex;align-self:flex-start">
                        <h4 style="color:white"> Name Playlist</h4>
                    </div>
                </div>
                    
                    <div class="card shadow-lg  bg-white rounded" style="width: 50rem;display:flex;flex-direction:row;margin:10px">
                        <img class="card-img-top" src="url" alt="Card image cap">
                        <div class="card-body">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <h2 class="card-title">Film titre</h2>
                            
                            </div>  
                            <p><i class="fas fa-clock"></i><span style="margin-left:5">Duree film</span></p>
                            <p class="card-text">Descriptif</p>
                            <p style="font-weight:bold">Release year: </p>
                            <p style="margin-left:20px"> YEAR </p>
                            <hr>
                            <div style="display: flex;flex-direction:row;justify-content:space-evenly">
                                <button  class="btn btn-outline-primary">
                                    <i class="fas fa-info" style="color:black"></i>
                                </button>
                                <button  class="btn btn-outline-primary">
                                    <i class="fa fa-trash" style="color:black"></i>
                                </button>    
                            </div>
                        </div>
                    </div>
        </div>
        @endsection
        @section('footer')
        @parent
        @section('home')
        <li><a href=<?php print_r($urlHomeCo)?>>Home</a></li>
        @endsection
        @endsection
        <script>
    
        </script>
    </body>
</html>