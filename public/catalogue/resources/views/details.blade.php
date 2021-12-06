
<html>
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/details.css">
    </head>
    <body>
        <div style="background-color:black;margin-bottom:10px">
        <nav class="navbar navbar-expand-lg" id="navigation">
            <div class="container-fluid">
                <a class="navbar-brand" style=" color:white;" ><img src="../../image/MS.png" style="max-width: 55px; height:50px ;"></a>
                <div class='sign'>
                    <div class="history">
                        <button class="btn btn-link" id='in' type="submit" onclick="window.location= '{{ route('history') }}'">
                            <span style="color:white" >History</span>
                        </button>
                        <button class="btn btn-link" id='in' type="submit" onclick="window.location= '{{ route('playlist') }}'">
                            <span style="color:white" >Playlist</span>
                        </button>
                    </div> 
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown" style=" list-style-type: none">
                            <button class="btn btn-outline " style="color:white" id='in'   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user" style="color: white;"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                                <hr>
                                <a class="dropdown-item" href="{{ route('favorites') }}">My Favorites</a>
                                <hr>
                                <a class="dropdown-item" href="{{route('logout')}}" >Log out</a>
                            </div>
                        </li>
                    </ul>
                </div> 
            </div>
        </nav>
        </div>
        <div style="display:flex;justify-content:center;align-items:center;background-color: #080808;">
        <div class="historique">
        
            <div class="card" style="width: 50rem;display:flex;flex-direction:row;margin:10px">
                <img style="width:40%;height:inherit" src='{{$film[0]->image}}' alt="Card image cap">
                <div class="card-body"  >
                    <div style="display:flex;flex-direction:row;justify-content:space-between">
                        <h2 class="card-title">{{$film[0]->title}}</h2>
                    </div> 
                    <p><i class="fas fa-clock"></i><span style="margin-left:5">{{$film[0]->runtimeStr}}</span></p>
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
                    <p style="font-weight:bold">Release year: </p>
                    <p style="margin-left:20px"> {{$film[0]->year}} </p>
                    <p class="card-text"><span style="font-weight:bold">Category :</span>{{$film[0]->genres}}</p>
                    <p class="card-text">{{$film[0]->description}}</p>
                </div>
            </div>
        </div>
        </div>
            <div class="content-item" id="comments"> 
                <div class="col-sm-8" >   
                    <h3  >New Comment</h3>
                        <div style="display:flex;flex-direction:row;justify-content:space-between">
                            <div class="user-avatar">
                                <img src="{{$user[0]->profile_photo_path}}">
                            </div>                        
                            <div class="media-body" style="margin-left:10px;margin-top:30px">
                                <textarea class="form-control" placeholder="Your comment here"></textarea>
                                <button type="submit" class="btn pull-right"  style="background-color:#FFD100" onclick="yes()">Submit</button>          

                            </div>
                        </div>

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
                            @if($comment->id_user==$user[0]->id)
                            <div class="dropdown" id="mycomment">
                                <button class="btn" style="background-color:#FFD100" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button class="dropdown-item" onclick="deleteComment()">Delete</button>
                                </div>
                                </div>
                            @endif   
                        </div>
                        @endforeach
                </div>
            </div>

        <footer style="background-color:black">
            <div class="container">
              <div class="row">
                <div class="col-md-6 pr-md-5">
                  <p class="footer-site-logo d-block mb-4" id="aboutus">About us</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi perferendis ratione perspiciatis accusantium.</p>
                  <h4 style="color:white">Contact</h4>
                  <p>  <i class="fas fa-envelope" style="color: #FFD100;"></i> <a href="#" style="color: #999999; ">meryem.kaddam@etu.imt-nord-europe.fr </a></p>
                  <p>  <i class="fas fa-envelope" style="color: #FFD100;"></i> <a href="#" style="color: #999999; ">safae.el.hajji@etu.imt-nord-europe.fr </a></p>
                </div>
                <div class="col-md">
                  <h3>Discover</h3>
                  <ul class="list-unstyled" id="discover">
                    <li><a href="#">Playlist</a></li>
                    <li><a >History</a></li>
                    <li><a >Profile</a></li>
                  </ul>
                </div>
                <div class="col-md">
                  <h3>Follow Us</h3>
                  <ul class="social list-unstyled">
                    <li>
                        <button  class=" btn btn-outline-primary" style="background-color: #FFD100; margin:2">
                            <i style="color: black" class="fab fa-facebook"></i>
                        </button>
                    </li>
                    <li>
                        <button  class=" btn btn-outline-primary" style="background-color: #FFD100; margin:2">
                            <i style="color: black" class="fab fa-github"></i>
                        </button>
                    </li>
                  </ul>
                </div>
              </div> 
              <div class="row">
                <div class="col-12 text-center">
                  <div class="copyright mt-5 pt-5">
                    <p><small>&copy; 2020&mdash;2021 All Rights Reserved.</small></p>
                  </div>
                </div>
              </div> 
            </div>  
        </footer>

       
        <script>
            function deleteComment(){
                let dropdown=document.getElementById('mycomment');
                console.log(dropdown.parentElement.remove());
                let route="{{route('delcomment',['film'=>$film[0]->id_media])}}";
                 const response=fetch(route);
            }
             function yes(){
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; 
                var yyyy = today.getFullYear();
                if(dd<10){
                    dd='0'+dd;
                }
                if(mm<10){
                    mm='0'+mm;
                }
                 let textarea=document.querySelector('textarea').value;
                 let comments=document.getElementsByClassName('media');
                 let strHtml=` 
                 <div class="media">
                        <div class="user-avatar">
                             <img src="{{$user[0]->profile_photo_path}}">
                        </div>                     
                        <div class="media-body" style="margin-left:10px">
                            <p class="media-heading" style="color:white">{{$user[0]->nom}} {{$user[0]->prenom}}</p>
                            <p style="  color: #777;">`+textarea+`</p>
                            <ul class="list-unstyled list-inline media-detail pull-left">
                                <li><i class="fa fa-calendar" style="color:#FFD100"></i><span style="  color: #777;"> `+yyyy+'-'+mm+'-'+dd+`</span></li>
                            </ul>
                            </div>
                        </div>` 
                 comments[comments.length-1].insertAdjacentHTML('afterend',strHtml);
                 console.log(comments);
                 let route="{{route('addcomment',['contenu'=>'val','film'=>$film[0]->id_media])}}".replace('val',textarea);
                 const response=fetch(route);
            }


        </script>
    </body>
</html>