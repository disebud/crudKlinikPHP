<?php
 // include database connection file
 include("../config.php");

    // Check If form submitted, insert form data into users table.
    // if(isset($_POST['Submit'])) {
        $nopasien = $_POST['nopasien'];
        $namapasien = $_POST['namapasien'];
        $jk = $_POST['jk'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $agama = $_POST['agama'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
      
       

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO pasien(nopasien,namapasien,jk,tgl_lahir,agama,telp,alamat) VALUES($nopasien,'$namapasien','$jk','$tgl_lahir','$agama','$telp','$alamat')");

        // Show message when user added
        echo "User added successfully. <a href='pasien.php'>View Users</a>"
    // }
    ?>