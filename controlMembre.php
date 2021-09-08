<?php
require_once 'connexionDb.php';
require_once 'saisieMembre.php';
if(isset($_POST['valider'])){
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $adresse = $_POST['Adresse'];
    $tel = $_POST['Tel'];
    addMembre($nom, $prenom, $adresse, $tel);
    header("location:http://localhost/GestionMembre/?ok=listm");
}
?>