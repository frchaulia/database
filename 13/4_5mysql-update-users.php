<?php 
  
  include('3_connectusinglogin.php');
  
  $username = $_GET['username'];
  
  $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

  $result = mysqli_query($link, $query);

  $row = mysqli_fetch_array($result);

  ?>


<?php

//include koneksi database
include('3_connectusinglogin.php');

//get data dari form
$username     = $_POST['username'];
$password     = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE users SET username = '$username', password = '$password' WHERE username = '$username'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($link->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Error Update!";
}

?>