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
        $result = mysqli_query($koneksi, "UPDATE pasien set namapasien='$namapasien',jk='$jk',tgl_lahir='$tgl_lahir',agama='$agama',telp='$telp',alamat='$alamat' WHERE nopasien = $nopasien ");

        // Show message when user added
        echo "User Updated successfully. <a href='pasien.php'>View Users</a>"
    // }
    ?>