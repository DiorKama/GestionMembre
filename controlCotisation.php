<?php
//ajout
require_once 'connexionDb.php';
require_once 'saisieCotisation.php';
if(isset($_POST['valider'])){
    $DateCotis = $_POST['DateCotis'];
    $mois = $_POST['Mois'];
    $motif = $_POST['Motif'];
    $montant = $_POST['Monant'];
    $matricule = $_POST['Matricule'];
    addCotisation($DateCotis, $mois, $motif, $montant, $matricule);
    header("location:http://localhost/GestionMembre/?ok=listc");
}
//supression
if(isset($_GET['NumCotis'])){
 deleteCotisation($_GET['NumCotis']);
    header("location:http://localhost/GestionMembre/?ok=listc");
}
//modifier
if(isset($_POST['modif'])){
    $NumCotis = $_POST['NumCotis'];
    $DateCotis = $_POST['DateCotis'];
    $mois = $_POST['Mois'];
    $motif = $_POST['Motif'];
    $montant = $_POST['Montant'];
    $matricule = $_POST['Matricule'];
    updateCotistion( $NumCotis, $DateCotis, $mois, $motif, $montant, $matricule);
    header("location:http://localhost/GestionMembre/?ok=listc");
}
if(isset($_GET['Mat'])){
    $liste=detailCotisation($_GET['Mat']);
    $svg = mysqli_fetch_row($liste);
    var_dump($svg);

}
?>