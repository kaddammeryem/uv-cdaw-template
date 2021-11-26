<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Playlist</title>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../public/css/profile.css">
    <link rel="stylesheet" href="../../public/css/playlist.css" media="screen">
</head>
<body>
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
                        <button class="btn btn-link" id='in' type="submit">
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
                              <a class="dropdown-item" href="profile.html">Profile</a>
                              <hr>
                              <a class="dropdown-item" href="homedisc.html">Log out</a>
                            </div>
                          </li>
                        </ul>
                    
                    
                </div>
            </div>
        </div>
    </nav>
    
<div class="container mx-auto mt-auto">
        <h1 >Your Playlists</h1>
        <a href="#" class="btn" id="Ajouter"><i class="fas fa-plus"></i> Ajouter</a>
  <div class="row">
    <div class="col-md-auto">   
      <div class="card " style="width: 20rem;">
        <img src="https://i.pinimg.com/originals/f4/de/39/f4de3951ea3727ee48d3cc780cbe3a2b.jpg" class="card-img-top" >
        <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
            <h5 class="card-title">Comedy</h5>
            <h6 class="card-subtitle mb-2 text-muted">May 19, 20​​21</h6>
            <button class="btn btn-outline" id="more">More</button>
        </div> 
      </div>
    </div>
    <div class="col-md-auto">
      <div class="card" style="width: 20rem;">
        <img src="https://ak.picdn.net/shutterstock/videos/22354483/thumb/9.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
          <h5 class="card-title">Movie Night</h5>
          <h6 class="card-subtitle mb-2 text-muted">March 15, 2021</h6>
          <button class="btn btn-outline" id="more">More</button>
        </div>
      </div>
    </div>    
    <div class="col-md-auto">
      <div class="card" style="width: 20rem;">
       <img src="https://cdn.pixabay.com/photo/2017/08/05/13/20/vintage-2583549_960_720.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
          <h5 class="card-title">To Watch Later</h5>
          <h6 class="card-subtitle mb-2 text-muted">February 6, 2021</h6>
         <button class="btn btn-outline" id="more">More</button>
        </div>  
      </div>
    </div>
  </div>
</div>
<div class="container mx-auto mt-4">
  <h1 >Suggestions</h1>
  <div class="row">
    <div class="col-md-auto">   
      <div class="card " style="width: 20rem;">
        <img src="https://media.timeout.com/images/100654045/630/472/image.jpg" class="card-img-top" >
        <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
            <h5 class="card-title">Romance</h5>
            <button class="btn btn-outline" id="more">More</button>
        </div>  
      </div>
    </div>   
    <div class="col-md-auto">
      <div class="card" style="width: 20rem;">
        <img src="https://static.fnac-static.com/multimedia/Images/FR/NR/05/de/ce/13557253/1540-1/tsp20210604142716/Fast-And-Furious-9.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
          <h5 class="card-title">Action</h5>
          <button class="btn btn-outline" id="more">More</button>
        </div>
      </div>
    </div>    
    <div class="col-md-auto">
      <div class="card" style="width: 20rem;">
        <img src="https://youthincmag.com/wp-content/uploads/2016/03/Gladiator-2000.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
          <h5 class="card-title">History</h5>
          <button class="btn btn-outline" id="more">More</button>
        </div>  
      </div>
    </div>
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
                <li><a href="homedisc.html">Home</a></li>
                <li><a href="#">Playlist</a></li>
                <li><a href="#">History</a></li>
                <li><a href="auth.html">Profile</a></li>
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
</body>
</html>