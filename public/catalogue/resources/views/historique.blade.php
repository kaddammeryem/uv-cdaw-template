<html>
@extends('layouts.header')
@section('title', 'Home')
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
       @endsection
       @section('content')
        <div class="historique">
            <div style="width:50rem">
            <div style="margin:10px;display:flex;align-self:flex-start">
                <h4 >15 Nov 2021</h4>
            </div>
            </div>
            <div class="card shadow-lg  bg-white rounded" style="width: 50rem;display:flex;flex-direction:row">
                <img class="card-img-top" src="https://images.lindependant.fr/api/v1/images/view/5e8346543e454612453faab6/full/image.jpg?v=1" alt="Card image cap">
                <div class="card-body">
                    <div style="display:flex;flex-direction:row;justify-content:space-between">
                        <h2 class="card-title">Corona</h2>
                       
                    </div>  
                    <p><i class="fas fa-clock"></i><span style="margin-left:5">2h30min</span></p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p style="font-weight:bold">Release Date : </p>
                    <p style="margin-left:20px"> July 28,2018  </p>
                    <hr>
                    <div style="display: flex;flex-direction:row;justify-content:space-evenly">
                        <button  class="btn btn-outline-primary">
                            <i class="fas fa-info" style="color:black"></i>
                        </button>
                        <button  class="btn btn-outline-primary">
                            <i class="fas fa-plus" style="color:black"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card shadow-lg  bg-white rounded" style="width: 50rem;display:flex;flex-direction:row">
                <img class="card-img-top" src="https://images.lindependant.fr/api/v1/images/view/5e8346543e454612453faab6/full/image.jpg?v=1" alt="Card image cap">
                <div class="card-body">
                    <div style="display:flex;flex-direction:row;justify-content:space-between">
                        <h2 class="card-title">Corona</h2>
                       
                    </div>  
                    <p><i class="fas fa-clock"></i><span style="margin-left:5">2h30min</span></p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p style="font-weight:bold">Release Date : </p>
                    <p style="margin-left:20px"> July 28,2018  </p>
                    <hr>
                    <div style="display: flex;flex-direction:row;justify-content:space-evenly">
                        <button  class="btn btn-outline-primary">
                            <i class="fas fa-info" style="color:black"></i>
                        </button>
                        <button  class="btn btn-outline-primary">
                            <i class="fas fa-plus" style="color:black"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div style="width:50rem">
                <div style="margin:10px;display:flex;align-self:flex-start">
                    <h4>12 Nov 2021</h4>
                </div>
                </div>
            <div class="card shadow-lg  bg-white rounded" style="width: 50rem;display:flex;flex-direction:row">
                <img class="card-img-top" src="https://images.lindependant.fr/api/v1/images/view/5e8346543e454612453faab6/full/image.jpg?v=1" alt="Card image cap">
                <div class="card-body">
                    <div style="display:flex;flex-direction:row;justify-content:space-between">
                        <h2 class="card-title">Corona</h2>
                       
                    </div>  
                    <p><i class="fas fa-clock"></i><span style="margin-left:5">2h30min</span></p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p style="font-weight:bold">Release Date : </p>
                    <p style="margin-left:20px"> July 28,2018  </p>
                    <hr>
                    <div style="display: flex;flex-direction:row;justify-content:space-evenly">
                        <button  class="btn btn-outline-primary">
                            <i class="fas fa-info" style="color:black"></i>
                        </button>
                        <button  class="btn btn-outline-primary">
                            <i class="fas fa-plus" style="color:black"></i>
                        </button>
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