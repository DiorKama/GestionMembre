<?php
function getConnexion(){
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbname = 'espacemembre';
    $con = mysqli_connect($host, $user, $pwd, $dbname);
    return $con;
}
function executeSQL($sql){
    $exec = mysqli_query(getConnexion(), $sql);
    return $exec;
}
?>