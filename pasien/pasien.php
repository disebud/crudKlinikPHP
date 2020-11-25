<?php 
include("../part/header.php");
include("../config.php");
echo "
<h2>MASTER PASIEN</h2>
<a href='input_pasien.php'>Tambah Pasien</a>
<br><br>
<table border='1' width='100%'>
    <tr>
        <th>NO</th><th>Nomor Pasien</th>
        <th>Nama Pasien</th>
        <th>Aksi</th>
    </tr>";
    $tampil = mysqli_query($koneksi,"SELECT * FROM pasien");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
        echo "
        <tr>
            <td>$no</td>
            <td>$r[nopasien]</td>
            <td>$r[namapasien]</td>
            <td align='center'>
            <a href='pasien_edit.php?id=$r[nopasien]'>Edit</a>
            <a href='pasien_del.php?id=$r[nopasien]'>Delet</a>
            </td>
        </tr>";
        $no++;
    }
echo "
</table>
<br> By Disebud";
?>