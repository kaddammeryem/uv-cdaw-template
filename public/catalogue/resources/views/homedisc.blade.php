<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="../../public/css/homedisc.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php $urlAuth = route('auth');?>
    <?php $urlHistory = route('history');?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                        <button class="btn btn-outline-primary dropdown-toggle" style="color:white"    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div>      
                    <div class='sign'>
                        <button onclick="window.location= '{{ route('auth') }}'" class="btn btn-outline-primary" style="color:white">Signin</button>
                    </div>
                </div>
            </div>
        </nav>
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
                    <span class="visually-hidden">Previous</i></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#carouselExample" type="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <div style="display: flex;justify-content:center;align-items:center;margin:10">
            <h1 style="color:white">
                Top Movies
            </h1>
        </div>
        <div class="container-fluid">
            <div class="scrolling-wrapper row flex-row flex-nowrap justify-content-flex-start">
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min </span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://images.lindependant.fr/api/v1/images/view/5e8346543e454612453faab6/full/image.jpg?v=1'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://fr.web.img3.acsta.net/r_1280_720/pictures/17/06/26/11/21/572946.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://blogscdn.thehut.net/wp-content/uploads/sites/499/2018/04/30173853/Avengers-Infinity-War-poster-1_1200x672_acf_cropped.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://www.condor-films.fr/wp-content/uploads/2019/01/coeurs-ennemis_120x160_web_hd-360x480.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>               
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://blogscdn.thehut.net/wp-content/uploads/sites/499/2018/04/30173853/Avengers-Infinity-War-poster-1_1200x672_acf_cropped.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://blogscdn.thehut.net/wp-content/uploads/sites/499/2018/04/30173853/Avengers-Infinity-War-poster-1_1200x672_acf_cropped.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>              
             </div>
        </div>
        <div style="display: flex;justify-content:center;align-items:center;margin:10">
            <h1 style="color:white">
                Top Series
            </h1>
        </div>
        <div class="container-fluid">
            <div class="scrolling-wrapper row flex-row flex-nowrap justify-content-flex-start">
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://fr.web.img6.acsta.net/pictures/21/08/10/12/20/4633954.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min </span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://images.lindependant.fr/api/v1/images/view/5e8346543e454612453faab6/full/image.jpg?v=1'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://fr.web.img3.acsta.net/r_1280_720/pictures/17/06/26/11/21/572946.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://blogscdn.thehut.net/wp-content/uploads/sites/499/2018/04/30173853/Avengers-Infinity-War-poster-1_1200x672_acf_cropped.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://www.condor-films.fr/wp-content/uploads/2019/01/coeurs-ennemis_120x160_web_hd-360x480.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>               
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://blogscdn.thehut.net/wp-content/uploads/sites/499/2018/04/30173853/Avengers-Infinity-War-poster-1_1200x672_acf_cropped.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                </div>  
                <div id="accordion" class="first">
                    <div  class="col-4" classe="image"> 
                                <img id='boutton' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" src='https://blogscdn.thehut.net/wp-content/uploads/sites/499/2018/04/30173853/Avengers-Infinity-War-poster-1_1200x672_acf_cropped.jpg'/>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="boutton" data-parent="#accordion">
                        <div class="infos">
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <h3  style="margin-left:4">
                                                 The Girl With All The Gifts
                                            </h3>
                                            <div>
                                                 <div>
                                                    <span  style="width: 88%"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span >
                                                    <i class="far fa-clock" style="margin-left:4;font-weight:bold"></i>
                                                    <span style="margin-left:4">02h30min</span>
                                                </span>
                                            </div>
                                            <div >
                                                <p style="margin-left:4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ...</p>
                                            </div>
                                            <div>
                                                <label style="margin-left:4 ;font-weight:bold">Genre : <span style="font-weight:400">Comedie, Drama</span></label>   
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
                    <li><a href="#">Home</a></li>
                    <li><a href=<?php print_r($urlAuth)?>>Playlist</a></li>
                    <li><a href=<?php print_r($urlAuth)?>>History</a></li>
                    <li><a href=<?php print_r($urlAuth)?>>Profile</a></li>
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