<?php
include("../part/header.php");
include("../config.php");
$edit=mysqli_query($koneksi,"SELECT * FROM pasien WHERE nopasien=$_GET[id]");
$r=mysqli_fetch_array($edit);
echo "
<h3>Edit Pasien</h3>
<form method=POST action='pasien_edit_aksi.php' enctype='multipart/form-data'>
<table width='25%' border='0'>
            <tr> 
                <td>No Pasien</td>
                <td><input type='number' name='nopasien' value='$r[nopasien]'></td>
            </tr>
            <tr> 
                <td>Nama Pasien</td>
                <td><input type='text' name='namapasien' value='$r[namapasien]'></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type='text' name='jk' value='$r[jk]'></td>
            </tr>
            <tr> 
                <td>Tanggal Lahir</td>
                <td><input type='date' name='tgl_lahir' value='$r[tgl_lahir]'></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type='text' name='agama' value='$r[agama]'></td>
            </tr>
            <tr> 
                <td>Telphone</td>
                <td><input type='text' name='telp' value='$r[telp]'></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type='text' name='alamat' value='$r[alamat]'></td>
            </tr>
           
            <tr> 
                <td></td>
                <td><input type='submit'  value='Update'></td>
            </tr>
        </table>

</form>";

?>

