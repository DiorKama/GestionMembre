<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 mt-3">
    <div class=panel panel-info>
    <div class="panel-heading bg-info">Liste des membres ajoutées</div>
    <div class="panel-body">
     <table class="table table-hover">
         <tr>
         <th>Matricule</th> 
         <th>Nom</th> 
         <th>Prenom</th> 
         <th>Adresse</th> 
         <th>Tel</th> 
         <th>action</th>    
         </tr>
         <tr>
             <?php
             while ($svg = mysqli_fetch_row($link)) {
                 echo "<tr>
                      <td>$svg[0]</td>
                      <td>$svg[1]</td>
                      <td>$svg[2]</td>
                      <td>$svg[3]</td>
                      <td>$svg[4]</td>
                      <td><a href='controlCotisation.php?Mat=$svg[0]' class='btn btn-success'>Details</td>
                   </tr>";
             }
             ?>
         </tr>
     </table>
    </div>
    </div>
    </div>

    </div>

</body>
</html>