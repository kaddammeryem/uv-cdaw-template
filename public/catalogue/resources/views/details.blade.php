@extends('layouts.header')
@section('title', 'Details')
<html>
        <link href="../../public/css/details.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
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
                <h3 style="color:white">1 Comments</h3>
                <div class="media">
                        <div class="user-avatar">
                            <img src="https://i.pinimg.com/736x/8b/41/8d/8b418d2b374298028c4a312ade587afc.jpg">
                        </div>                     <div class="media-body" style="margin-left:10px">
                        <p class="media-heading" style="color:white">Pierre Donald</p>
                        <p style="  color: #777;">Exciting film like it.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar" style="color:#FFD100"></i><span style="  color: #777;"> 27/02/2014</span></li>
                        </ul>
                    </div>
                </div>
                <div class="media">
                        <div class="user-avatar">
                            <img src="https://i.pinimg.com/736x/8b/41/8d/8b418d2b374298028c4a312ade587afc.jpg">
                        </div>                     <div class="media-body" style="margin-left:10px">
                        <p class="media-heading" style="color:white">Jean Camille</p>
                        <p style="  color: #777;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar" style="color:#FFD100"></i><span  style="color: #777;"> 27/02/2014</span></li>
                        </ul>
                    </div>
                </div>
                <div class="media">
                        <div class="user-avatar">
                            <img src="https://i.pinimg.com/736x/8b/41/8d/8b418d2b374298028c4a312ade587afc.jpg">
                        </div>                       
                        <div class="media-body" style="margin-left:10px">
                        <p class="media-heading" style="color:white">John Doe</>
                        <p style="color: #777;">I love this actor</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar" style="color:#FFD100"></i><span style="  color: #777;"> 27/02/2014</span></li>
                        </ul>
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

    </body>
</html>