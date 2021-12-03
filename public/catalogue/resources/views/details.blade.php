@extends('layouts.header')
@section('title', 'Details')
<html>
    @section('head')
        @parent
        <link href="{{asset('css/details.css')}}" rel="stylesheet" type='text/css'>
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
                    <button class="btn btn-outline " style="color:white" id='in'   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <img class="card-img-top"  src='{{$film[0]->image}}' alt="Card image cap">
                    <div class="card-body" id="card-body2">
                        <h3 class="card-title" >{{$film[0]->title}}</h3>
                        <p class="card-text">
                            <span style="font-weight:bold">Directors :</span> 
                            @foreach($film as $fil)
                                @if($fil->fonction=='directeur') 
                                    {{$fil->nom}} {{$fil->prenom}},
                                @endif
                            @endforeach
                        </p>
                        <p class="card-text">
                            <span style="font-weight:bold">Actors:</span> 
                            @foreach($film as $fil)
                                @if($fil->fonction=='acteur') {{$fil->nom}}, 
                                    {{$fil->prenom}}
                                @endif
                            @endforeach
                        </p>
                        <p class="card-text"><span style="font-weight:bold">Release date :</span>{{$film[0]->year}}</p>
                        <p class="card-text"><span style="font-weight:bold">Category :</span>{{$film[0]->genres}}</p>
                        <p class="card-text"><span style="font-weight:bold">Description :</span>  {{$film[0]->description}}</p>
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
        <div class="content-item" id="comments"> 
            <div class="col-sm-8">   
                <h3  >New Comment</h3>
                <form>
                    <div class="media">
                        <div class="user-avatar">
                            <img src="https://i.pinimg.com/736x/8b/41/8d/8b418d2b374298028c4a312ade587afc.jpg">
                        </div>                        
                        <div class="media-body" style="margin-left:10px">
                            <textarea class="form-control" placeholder="Your comment here"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline pull-right" style="background-color:#FFD100" >Submit</button>
                </form>               
                <h3 style="color:white">{{count($comments)}} Comments</h3>
                @foreach($comments as $comment)
                <div class="media">
                        <div class="user-avatar">
                            <img src="{{$comment->profile_photo_path}}">
                        </div>                     
                        <div class="media-body" style="margin-left:10px">
                        <p class="media-heading" style="color:white">{{$comment->nom}} {{$comment->prenom}}</p>
                        <p style="  color: #777;">{{$comment->contenu}}</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar" style="color:#FFD100"></i><span style="  color: #777;"> {{$comment->date_comment}}</span></li>
                        </ul>
                    </div>
                </div>
                @endforeach
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