<?php
$servername = "db";
$username = "admin";
$password = "test123#";
$dbname = "database";

if($con = mysqli_connect($servername, $username, $password, $dbname)){
    die("Error de conexion con la db: " . $con->connect_error);
}
?>
