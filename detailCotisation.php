<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<div class="container col-md-12 mt-3">
    <div class=panel panel-info>
    <div class="panel-heading bg-info">Details</div>
    <div class="panel-body">
     <table class="table table-hover">
         <tr>
         <th>NumCoctis</th> 
         <th>DateCotis</th> 
         <th>Mois</th> 
         <th>Motif</th> 
         <th>Montant</th>
         <th>Matricule</th>
         <?php
             while ($svg = mysqli_fetch_row($link)) {
                 echo "<tr>
                      <td>$svg[0]</td>
                      <td>$svg[1]</td>
                      <td>$svg[2]</td>
                      <td>$svg[3]</td>
                      <td>$svg[4]</td>
                      <td>$svg[5]</td>
                      </tr>";
             }
         ?>   
</body>
</html>