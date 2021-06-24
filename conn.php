<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="admin";

    $con=mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection to this database".mysqli_connect_error());

    }
?>
        