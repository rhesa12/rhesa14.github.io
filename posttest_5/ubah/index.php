<?php 
session_start();
if ($_SESSION['priv'] != 'admin') {
    header("Location: ../");  
}
require "../konek.php"?>
<script>if ( window.history.replaceState ) {
 window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="login.css">
 
    <title>Ubah</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Ikan yang ingin di tambahkan</p>
            <div class="input-group">
            <label for="nama">Nama Ikan</label>
                <input type="text" id="nama" placeholder="Nama" name="nama" value="" required>
            </div>
            <div class="input-group">
                <label for="gambar">Gambar</label>
                <input id="gambar" type="file" placeholder="Gambar" name="gambar" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Submit</button>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $gambar = $_FILES['gambar']['name'];
                $temp = $_FILES['gambar']['tmp_name'];
                $uniq = uniqid();
                $baru = $uniq.".".$gambar;
                if(move_uploaded_file($temp, '../'.$baru)){
                    $query = mysqli_query($conn, "INSERT INTO `ikan`(`id`, `nama`, `gambar`) VALUES ('','$nama','$gambar')");
                    if($query){
                        echo "<script>alert('berhasil menambahkan data')</script>";
                    }
                    else{
                        echo error_log($query);
                    }
                }
                else{
                    echo "<script>alert('terdapat kesalahan ketika menambahkan data')</script>";
                }
            }
        ?> 
        <br><center>Ingin mengubah database yang ada? <a href="edit.php">Ubah</a> </center>
        <br><center>Ingin kembali? <a href="../">kembali</a> </center>
        </form>
    </div>
</body>
</html>