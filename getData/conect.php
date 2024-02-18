<?php
$host = "localhost";
$dbname = "dane";
$username = "root";

$password = "1234"; //może 1234

$conn = mysqli_connect( hostname: $host, 
                        username: $username, 
                        password: $password, 
                        database: $dbname);

if(mysqli_connect_errno()){
    die("Conecting error: " . mysqli_connect_error());
}

?>