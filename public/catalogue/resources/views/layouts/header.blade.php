<html>
    @section('head')
    <head>
        <title>M&S - @yield('title')</title>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    @show
    <body>
        @section('sidebar')
        <nav class="navbar navbar-expand-lg" id="navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id='brand'>Logo</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">   
                    <div class='formu'>    
                        <form class='formulaire'>
                            <input class="form-control me-2"  type="search" placeholder="Search" aria-label="Search">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown" style=" list-style-type: none">
                                <a class="btn btn-outline-primary dropdown-toggle" style="color:white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Title</a>
                                <hr>
                                <a class="dropdown-item" href="#">Actor</a>
                                <hr>
                                <a class="dropdown-item" href="#">Genre</a>
                                </div>
                            </li>
                            </ul>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown" style=" list-style-type: none">
                                    <button class="btn btn-outline-primary dropdown-toggle"  style="color:white"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item"  href="#">Movies</a>
                                    <hr>
                                    <a class="dropdown-item"  href="#">Series</a>
                                    </div>
                                </li>
                                </ul>
                        </form>
                        
                        <div class="history">
                            <button class="btn btn-link" id='in' type="submit" onclick="window.location= '{{ route('history') }}'">
                                <span style="color:white">History</span>
                            </button>
                            <button class="btn btn-link" id='in' type="submit">
                                <span style="color:white">Playlist</span>
                            </button>
                        </div> 
                    </div>   
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
                </div>
            </div>
        </nav>
        @show
        @yield('content')
        @section('footer')
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Playlist</a></li>
                    <li><a href=<?php print_r($urlHistory)?>>History</a></li>
                    <li><a href=<?php print_r($urlProfile)?>>Profile</a></li>
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
        @show
    </body>
</html>