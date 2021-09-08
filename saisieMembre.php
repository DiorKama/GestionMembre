<?php
function addMembre($Nom, $Prenom, $Adresse, $Tel){
    $sql = "INSERT INTO membre VALUES(null, '$Nom', '$Prenom', '$Adresse', $Tel)";
    return executeSQL($sql);
}
function listeMembre(){
    $sql = "SELECT * FROM membre";
     return executeSQL($sql);
}
?>