<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
    <div style= "text-align : right ; margin-bottom : 25px; margin-right: 25px ; margin-top: 25px">   
         <a href= "{{route('tableau')}}" type="button" class="btn btn-primary " >Retour</a>
    </div>
   
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin-top:50px">
        <h1 style="font-weight:bold">Film infos</h1>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$infos->path}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> {{$infos->name}}</h5>
                <p class="card-text">Directors : {{$infos->director}}</p>
                <p class="card-text">Categorie :  {{$cat=App\Models\Category::where('id',$infos->categorie_id)->first()->name}}</p>
            </div>
        </div>
    </div>
</body>

</html>