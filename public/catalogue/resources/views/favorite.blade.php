@extends('layouts.header')
@section('title', 'Home')
<html>
    @section('head')
        @parent
        <link href="../../public/css/favorite.css" rel="stylesheet">
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
                    <button class="btn btn-outline-primary " style="color:white" id='in'   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user" style="color: white;"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <hr>
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" value="Logout" class="dropdown-item"
                                        >
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                     
                     </div>
                </li>
            </ul>
        </div>      
        @endsection
       @endsection
       @section('content')
		
			<div class="container">
				<div class="text-center">
					<h1 style = "margin-bottom: 15px;">Your Favorite Medias</h1>
				</div>
				<div class="container">
					<div class="card-columns">
						@foreach($films as $film)
						<div class="card" data-id="{{$film->id_media}}">
							<img class="card-img-top" src='{{$film->image}}' alt="Card image cap">
							<div class="card-body"  >
								<h5 class="card-title">{{$film->title}}</h5>
								<p class="card-text">
									{{$film->description}}
								</p>
							</div>
							<div class='detadd'>
								<button type="button" onclick="window.location='{{route('details',[$film->id_media])}}'"id='details' class="btn" >
                                    <i class="fas fa-info"></i>
                                </button>
                                <button class="btn" type="button" id="details" onclick="yes({{$film->id_media}})">
                                        <i   class="fas fa-heart"></i>
                                </button>
                            </div>
						</div>
						@endforeach
				</div>
			</div>
		@endsection
		@section('footer')
			@parent
		@section('home')
			<li><a href=<?php print_r($urlHomeDisc)?>>Home</a></li>
		@endsection
        <script>
            function yes(id){
                let i=document.getElementsByClassName('card');   
                for(let j=0;j<2;j++){
                    if(i[j].dataset.id==id){
                        i[j].remove();
                        let route="{{route('delfav',['film'=>'id'])}}".replace('id',id);
                        const response=fetch(route);
                        break;
                    }
                
                }
                
                /*if(i.className === 'far fa-heart'){
                    i.className = 'fas fa-heart';
                    let route="{{route('addfav',['film'=>'id'])}}".replace('id',id);
                    const response=fetch(route);
                } else {

                    i.className = 'far fa-heart';
                    let route="{{route('delfav',['film'=>'id'])}}".replace('id',id);
                    const response=fetch(route);
                }*/
               
              
         
            }
           
          
           
            //stop form from submitting
    

        </script>
	@endsection
	</body>
</html>