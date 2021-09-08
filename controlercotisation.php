<?php
require_once('connexionDb.php');{
if ($SERVER["REQUEST_METHOD"]="POST")
$DateCotis=$_POST["DateCotis"];
$Mois=$_POST["Mois"];
$Motif=$_POST["Motif"];
$Montant=$_POST["Montant"];
$Matricule=$_POST["Matricule"];

$statement =$mysqli->prepare("INSERT INTO `cotisation` (`DateCotis`, `Mois`, `Motif`, `Montant`, `Matricule`) VALUES(?,?,?,?,?)");
$statement->bind_param('sssss',$DateCotis,$Mois,$Motif,$Montant,$Matricule);
}
?>