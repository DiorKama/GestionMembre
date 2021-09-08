<?php
require_once "connexionDb.php";
function addCotisation($DateCotis, $Mois, $Motif, $Montant, $Matricule){
    $sql = "INSERT INTO cotisation VALUES (null,'$DateCotis' , '$Mois','$Motif',$Montant, $Matricule)";
    return executeSQL($sql);
}
function listeCotisation(){
    $sql = "SELECT * FROM cotisation";
     return executeSQL($sql);
}
function deleteCotisation($NumCotis){
    $sql = "DELETE FROM cotisation WHERE NumCotis = $NumCotis";
    return executeSQL($sql);
}
function updateCotistion($NumCotis, $DateCotis, $Mois, $Motif, $Montant, $Matricule){
    $sql = "UPDATE cotisation SET DateCotis = '$DateCotis', Mois = '$Mois', Motif = '$Motif', Montant = '$Montant', Matricule = '$Matricule' WHERE Numcotis=$NumCotis"; 
    return executeSQL($sql);
}
function getCotisationById($NumCotis){
    $sql = "SELECT * FROM cotisation WHERE NumCotis=$NumCotis";
    return executeSQL($sql);
}
function RechercheDeMois($mois){
    $sql = "SELECT * FROM cotisation WHERE mois='$mois'";
    return executeSQL($sql);
}
function detailCotisation($mat){
    $sql = "SELECT * FROM cotisation WHERE Matricule=$mat";
    return executeSQL($sql);
}
?>