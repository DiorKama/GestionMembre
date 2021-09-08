<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3 mt-3">
   <div class="panel panel-info">
   <div class="panel-heading bg-info">Formulaire de modificationCotisation</div>
   <div class="panel-body">
   <form method="POST" action="controlcotisation.php">
   <div class="form-group">
           <label class="control-label">Identifiant</label>
           <input type="text" name="NumCotis" class="form-control" readonly ="readonly" value="<?php echo $link[0]?>">
       </div>
       <div class="form-group">
           <label class="control-label">DateCotis</label>
           <input type="date" name="DateCotis" class="form-control" value="<?php echo $link[1]?>">
       </div>
       <div class="form-group">
           <label class="control-label">Mois</label>
           <select class="select" name="Mois" value="<?php echo $link[2]?>">
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
           <select class="select" name="Motif" value="<?php echo $link[3]?>">
                <option value=""></option>
                <option value="inscription">Inscription</option>
                <option value="mensualité">Mensualité</option>
                </select>
       </div>
       <div class="form-group">
           <label class="control-label">Montant</label>
           <input type="text" name="Montant" class="form-control" value="<?php echo $link[4]?>">
       </div>
       <div class="form-group">
           <label class="control-label">Membre</label>
           <input type='number' name="Matricule" class="form-control" value="<?php echo $link[5]?>">    
       </div>
       <button class="btn btn-success" name="modif" type="submit">Modifier</button>
       <button class="btn btn-danger" name="annuler" type="reset">Annuler</button>
   </form>
   </div>
   </div>
   </div>
</body>
</html>