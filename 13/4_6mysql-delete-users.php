<?php 
include('3_connectusinglogin.php');

//get id
$username = $_GET['username'];

$query = "DELETE FROM users WHERE username = '$username'";

echo $query;

if($link->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>