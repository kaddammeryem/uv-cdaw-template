@extends('layouts.header')
@section('title', 'Details')
<html>
    @section('head')
        @parent
        <link href="../../public/css/details.css" rel="stylesheet">
       
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
                        <a class="dropdown-item" href=<?php print_r($urlHomeDisc)?>>Log out</a>
                     </div>
                </li>
            </ul>
        </div>      
        @endsection
       @endsection
       @section('content')
        <div class="content">
            <div class="item1Cont">
            <div class="item1" >
                    <div class="card" style="width: 40rem;height:720px">
                        <img class="card-img-top" src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap">
                        <div class="card-body" id="card-body2">
                            <h5 class="card-title"> Corona</h5>
                            <p class="card-text"><span style="font-weight:bold">Directors :</span> Jean-Philippe</p>
                            <p class="card-text"><span style="font-weight:bold">Actors:</span> Jean-Dolmert</p>
                            <p class="card-text"><span style="font-weight:bold">Release date :</span> Jean-Dolmert</p>
                            <p class="card-text"><span style="font-weight:bold">Category :</span>  Drama,Action</p>
                            <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>

                        </div>
                    </div>

            </div>
            </div>
            <div class="overflow-auto">   
            <div class="item2">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="color:white">Episodes</th>
                            </tr>
                        </thead> 
                        <tbody> 
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>                  
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>
                            <div class="col-sm-4">
                                    <tr>
                                        <td>
                                            <div class="imageEpisode">
                                                <img src="https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg" alt="Card image cap" class="episode">
                                            <div>
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <h5 class="card-title"> Episode 1</h5>
                                                <p class="card-text"><span style="font-weight:bold">Duration :</span> 1h45</p>
                                                <p class="card-text"><span style="font-weight:bold">Description :</span>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                        </td>   
                                    </tr>
                            </div>
                        </tbody>
                    </table>
                    </div>
            </div>
            </div>
        </div>
        <div style="background-color:black">
            <h2 style="color:white">Comments</h2>
            <div>
                <p style="color:white"> Comment 1</p>
                <hr >
                <p style="color:white"> Comment 1</p>
                <hr>
                <p style="color:white"> Comment 1</p>
                <hr>
                <p style="color:white"> Comment 1</p>
                <hr>
                <p style="color:white"> Comment 1</p>
                <hr>
                <p style="color:white"> Comment 1</p>
                <hr>
                <p style="color:white"> Comment 1</p>
                <hr>
                <p style="color:white"> Comment 1</p>
                <hr>
                <p style="color:white"> Comment 1</p>
                <hr>   
            </div>
            <h2 style="color:white">Suggestions</h2>
            <div>
        </div>
       
            
                
        
        </div>
        

        @endsection
        @section('footer')
        @parent
        @section('home')
        <li><a href=<?php print_r($urlHomeCo)?>>Home</a></li>
        @endsection
        @endsection

    </body>
</html>