<?php
$servername = "db";
$username = "admin";
$password = "test123#";
$dbname = "database";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
