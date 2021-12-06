@extends('layouts.header')
@section('title', 'Favorites')
    <html>
        @section('head')
            @parent
            <link href="../../public/css/favorite.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        @endsection
        @section('sidebar')
            @parent
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
							<img class="card-img-top" src='{{$film->image}}' alt="Card image cap"  onclick="window.location='{{route('details',[$film->id_media])}}'">
							<div class="card-body"  >
								<h5 class="card-title" style="color:white">{{$film->title}}</h5>
								<p class="card-text">
									{{$film->description}}
								</p>
							</div>
							<div class='detadd'>
								<button type="button" id='details' class="btn" >
                                    <i class="fas fa-info"></i>
                                </button>
                                <button class="btn" type="button" id="details" onclick="deleteFavorite({{$film->id_media}})">
                                        <i   class="fas fa-heart"></i>
                                </button>
                            </div>
						</div>
						@endforeach
				    </div>
			    </div>
            </div>
		@endsection
		@section('footer')
		@parent
        <script >
            "use strict";
            // -------------- Event Handler of delete -----------
            function deleteFavorite(id){
                // We select all the cards containing the favorite info
                let i=document.getElementsByClassName('card');   
                for(let j=0;j<i.length;j++){
                    // Then we select the one with dataset equal to id film clicked
                    if(i[j].dataset.id==id){
                        //Then we remove it from the page and the database without refreshing the page
                        i[j].remove();
                        let route="{{route('delfav',['film'=>'id'])}}".replace('id',id);
                        const response=fetch(route);
                        console.log(response)
                        break;
                    }
                }
            }
           
           
        </script>
        @endsection
        
        
	</html>