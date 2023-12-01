<?php
    $dbhost = "db";
    $dbuser = "admin";
    $dbpass = "test123#"; 
    $dbname = "database";
    
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
    {
    
        die("failed to connect!");
    }
?>
