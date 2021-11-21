<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Films</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
    </head>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin-top:50px">
                @if(session()->has('info'))
                <div class="notification is-success">
                    <p> {{session('info')}}</p>
                </div>
                @endif
            </div>  
    <div class="card">
        <header class="card-header">
            
            <p class="card-header-title">Films</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                            <tr>
                                <td>{{ $film->id }}</td>
                                <td><strong>{{ $film->name }}</strong></td>
                                <td><a class="button is-primary" href="{{route('film',['film'=>$film->id])}}">Voir</a></td>
                                <td><a class="button is-warning" href="{{route('formuUp',['film'=>$film->id])}}">Modifier</a></td>
                                <td>
                                    <form action="film/{{$film->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="button is-danger" type="submit" value="Supprimer"></input>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>