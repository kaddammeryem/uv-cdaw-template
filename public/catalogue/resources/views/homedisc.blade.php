@extends('layouts.header')
@section('title', 'Home')
<html>
    @section('head')
        @parent
        <link href="../../public/css/homedisc.css" rel="stylesheet">
    @endsection
    <body>
        @section('sidebar')
        @parent
        <?php $urlProfile = route('profile');?>
        <?php $urlHomeDisc = route('homedisc');?> 
        <?php $urlHistory = route('history');?>
        <?php $urlHomeCo = route('homeco');?>
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
        @endsection
        @section('footer')
        @parent
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