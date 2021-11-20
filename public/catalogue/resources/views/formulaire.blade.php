
<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
 <html>
    <head>
        <title>Ajout Film</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     </head>
     <body>
         <div class="container">
         <form action="film" method="post">
                 @csrf
                 <h2>Ajouter un film</h2>
                 
                 <div class="form-group">
                   <label for="nom">Nom du film</label>
                   <input type="text" class="form-control" name="nom" placeholder="">
                 </div>
                 
                 <div class="form-group">
                   <label for="cat1">Catégorie 1</label>
                   <input type="number" class="form-control" name="cat1" placeholder="">
                 </div>
                 <div class="form-group">
                   <label for="directeur">Directeur</label>
                   <input type="text" class="form-control" name="directeur" placeholder="">
                 </div>
                 <div class="form-group">
                   <label for="path">Chemin</label>
                   <textarea class="form-control" name="path" rows="3"></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary">Add</button>
                 </form>
                
            
         </div>
    </body>
</html>