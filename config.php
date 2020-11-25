<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "db_klinik";

$koneksi = mysqli_connect($server,$username,$password,$database)
or die ("DATABASE TIDAK BISA DIBUKA");

?>