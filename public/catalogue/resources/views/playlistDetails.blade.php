@extends('layouts.header')
@section('title', 'Playlist Details')
<html>
    @section('head')
        @parent
        <link href="../../public/css/favorite.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    @endsection
    <body>
        @section('sidebar')
            @parent
        @endsection
        @section('content')
			<div class="container">
				<div class="text-center">
					<h1 style = "margin-bottom: 15px;">Your Playlist Medias</h1>
				</div>
				<div class="container">
					<div class="card-columns">
						@foreach($films as $film)
						<div class="card">
							<img class="card-img-top" src='{{$film->image}}' alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title" style="color:white">{{$film->title}}</h5>
								<p class="card-text">
									{{$film->description}}
								</p>
							</div>
							<div class='detadd'>
								<button type="button" id='details' class="btn" >
                                    <i class="fas fa-info"></i>
                                </button>
                                <button type="button" id='details' class="btn" >
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="button" id='details' class="btn" >
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
						</div>
						@endforeach
				</div>
			</div>
		@endsection
		@section('footer')
			@parent
	@endsection
	</body>
</html>