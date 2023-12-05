<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "demo";    

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>