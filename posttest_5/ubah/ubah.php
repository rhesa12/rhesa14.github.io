<?php 
session_start();
if ($_SESSION['priv'] != 'admin') {
    header("Location: ../");
    
}
$id =$_GET['id'];
require "../konek.php";
$tempat = mysqli_query($conn, "SELECT * FROM `ikan` WHERE id = $id");
                while($row = mysqli_fetch_assoc($tempat)):
                    $nama= $row['nama'];
                    $temps = $row['gambar'];
                endwhile;
?>
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
 
    <title>Login</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 1.2rem; font-weight: 800;">Berikut nama ikan di pilih</p>
            <p>Nama : <?php echo $nama?></p>
            <br>
            <p class="login-text" style="font-size: 1rem; font-weight: 800;">Data baru ikan yang dipilih</p>
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
                    if(move_uploaded_file($temp, '../'.$gambar)){
                        $query = mysqli_query($conn, "UPDATE `ikan` SET `id`='$id',`nama`='$nama',`gambar`='$gambar' WHERE id = $id");
                        if($query){
                            echo "<script>alert('berhasil mengubah data')document.location.href = '.';</script>";
                        }
                        else{
                            echo error_log($query);
                        }
                    }
                    else{
                        echo "<script>alert('terdapat kesalahan ketika mengubah data')document.location.href = '.';</script>";
                    }
            }
        ?> 
        <br><center>Tidak jadi mengubah data? <a href="edit.php">Kembali</a> </center>
        </form>
    </div>
</body>
</html>