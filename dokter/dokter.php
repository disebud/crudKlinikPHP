<?php 
include("../part/header.php");
include("../config.php");
echo "
<h2>MASTER DOKTER</h2>
<a href='input_dokter.php'>Tambah Dokter</a>
<br><br>
<table border='1' width='100%'>
    <tr>
        <th>NO</th><th>Nomor Dokter</th><th>Nama Dokter</th>
    </tr>";
    $tampil = mysqli_query($koneksi,"SELECT * FROM dokter");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
        echo "
        <tr>
            <td>$no</td>
            <td>$r[nodokter]</td>
            <td>$r[namadokter]</td>
        </tr>";
        $no++;
    }
echo "
</table>
<br> By Disebud";
?>