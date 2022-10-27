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
 
    <link rel="stylesheet" type="text/css" href="edit.css">
 
    <title>Login</title>
</head>
<body>
    <p style = 'font-size:20px; color :black'>Tidak jadi melakukan pengeditan data?<a href="./">kembali</a></p>
    <?php
        echo"<table border ='1px'><th colspan='5'>FILE IKAN</th><tr><td style= 'width :5%'>No</td><td style = 'width: 25%'>Nama</td><td style = 'width: 25%'>Nama File</td><td colspan= '2' style = 'width: 5%'>operator</td></tr>";
            $datas = mysqli_query($conn, "SELECT * FROM `ikan`");
            $no =1;
            while ($row = mysqli_fetch_assoc($datas)) :
                $nama = $row['nama'];
                $id = $row['id'];
                $gambar = $row['gambar'];
                echo "<tr><td style = 'text-align : center'>$no</td> <td style = 'text-align : center'>$nama</td> <td style = 'text-align : center'>$gambar</td> <td style = 'text-align : center'><a href ='ubah.php?id=$id'>Ubah</a></td> <td style = 'text-align : center'><a href ='hapus.php?id=$id'>Hapus</a></td></tr>";
                $no++;
        
        endwhile;
        echo"</table>";
        ?>
</body>
</html>