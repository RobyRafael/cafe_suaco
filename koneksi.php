<?php
session_start();
// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost","root","","cafe_suaco");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_error());
}



?>
