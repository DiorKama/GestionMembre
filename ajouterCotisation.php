<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
    <title>Document</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3 mt-3">
   <div class="panel panel-info">
   <div class="panel-heading bg-info">Formulaire d'ajout de Cotisation</div>
   <div class="panel-body">
   <form method="POST" action="controlcotisation.php">
       <div class="form-group">
           <label class="control-label">DateCotis</label>
           <input type="date" name="DateCotis" class="form-control">
       </div>
       <div class="form-group">
           <label class="control-label">Mois</label>
           <select class="select" name="Mois">
                    <option value=""></option>
                    <option value="Janvier">Janvier</option>
                    <option value="Février">Février</option>
                    <option value="Mars">Mars</option>
                    <option value="Avril">Avril</option>
                    <option value="Mai">Mai</option>
                    <option value="Juin">Juin</option>
                    <option value="Juillet">Juillet</option>
                    <option value="Août">Août</option>
                    <option value="Septembre">Septembre</option>
                    <option value="Octobre">Octobre</option>
                    <option value="Novembre">Novembre</option>
                    <option value="Decembre">Decembre</option>
            </select>
       </div>
       <div class="form-group">
           <label class="control-label">Motif</label>
           <select class="select" name="Motif">
                <option value=""></option>
                <option value="inscription">Inscription</option>
                <option value="mensualité">Mensualité</option>
                </select>
       </div>
       <div class="form-group">
           <label class="control-label">Montant</label>
           <input type="text" name="Monant" class="form-control">
       </div>
       <div class="form-group">
           <label class="control-label">Membre</label>
           <select class="form-control" name='Matricule'>
               <option value="">Faites votre choix</option>
               <?php
               require_once 'connexionDb.php';
               require_once 'saisieMembre.php';
               $listm = listeMembre();
               while ($ligne = mysqli_fetch_row($listm)){
                   echo "<option value='$ligne[0]'>$ligne[1] </option>";
               }
               ?>
        </select>
       </div>
       <button class="btn btn-success" name="valider" type="submit">Ajouter</button>
       <button class="btn btn-danger" name="annuler" type="reset">Annuler</button>
   </form>
   </div>
   </div>
   </div>
   <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></scrip
</body>
</html>