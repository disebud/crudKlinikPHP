<?php 
include("../config.php");
$nopasien = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM pasien WHERE nopasien = $nopasien ");
echo "<a href='pasien.php'>Data Berhasil Dihapus...</a>"
?>