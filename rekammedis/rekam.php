<?php 
include("../part/header.php");
include("../config.php");
echo "
<h2>MASTER REKAM MEDIS</h2>
<a href='input_dokter.php'>Tambah Dokter</a>
<br><br>
<table border='1' width='100%'>
    <tr>
        <th>NO</th><th>Nomor Rekam</th><th>Tanggal Rekam</th>
    </tr>";
    $tampil = mysqli_query($koneksi,"SELECT * FROM rekammedis");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
        echo "
        <tr>
            <td>$no</td>
            <td>$r[norekam]</td>
            <td>$r[tgl_rekam]</td>
        </tr>";
        $no++;
    }
echo "
</table>
<br> By Disebud";
?>