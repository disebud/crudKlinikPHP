<html>
<head>
    <title>Add Data Pasien</title>
</head>

<body>
    <a href="pasien.php">Go to Home</a>
    <br/><br/>

    <form action="pasien_input_aksi.php" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr> 
                <td>No Pasien</td>
                <td><input type="number" name="nopasien"></td>
            </tr>
            <tr> 
                <td>Nama Pasien</td>
                <td><input type="text" name="namapasien"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jk" placeholder="L atau P"></td>
            </tr>
            <tr> 
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" placeholder="yyyy-mm-dd"></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="agama" placeholder="agama"></td>
            </tr>
            <tr> 
                <td>Telphone</td>
                <td><input type="text" name="telp" placeholder="0000000"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Bekasi"></td>
            </tr>
           
            <tr> 
                <td></td>
                <td><input type="submit"  value="Add"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>
