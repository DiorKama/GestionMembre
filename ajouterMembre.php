<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
   <div class="container col-md-6 col-md-offset-3 mt-3">
   <div class="panel panel-info">
   <div class="panel-heading bg-info">Formulaire d'ajout de membre</div>
   <div class="panel-body">
   <form method="POST" action="controlMembre.php">
       <div class="form-group">
           <label class="control-label">Nom</label>
           <input type="text" name="Nom" class="form-control">
       </div>
       <div class="form-group">
           <label class="control-label">Prenom</label>
           <input type="text" name="Prenom" class="form-control">
       </div>
       <div class="form-group">
           <label class="control-label">Adresse</label>
           <input type="text" name="Adresse" class="form-control">
       </div>
       <div class="form-group">
           <label class="control-label">Tel</label>
           <input type="text" name="Tel" class="form-control">
       </div>
       <button class="btn btn-success" name="valider" type="submit">Ajouter</button>
       <button class="btn btn-danger" name="annuler" type="reset">Annuler</button>
   </form>
   </div>
   </div>
   </div>
        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>
</body>
</html>