	<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Favorite</title>
		<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
		<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="profile.css">
		<link rel="stylesheet" href="favorite.css" media="screen">
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
		</nav>
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