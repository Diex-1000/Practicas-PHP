<?php

//Crear la conexion a la BD
$db_host = "localhost";
$db_username = "appUser";
$db_password = "DiegoGoCa1000";
$db_database = "app";

$db = new mysqli($db_host, $db_username, $db_password, $db_database);
mysqli_query($db, "SET NAMES 'utf8'");

if($db->connect_errno > 0) {
    die('No es posible conectarse a la BD ['. $db->connect_error . ']');

    
}