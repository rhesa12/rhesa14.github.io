<?php 
session_start();
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
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Daftar</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Daftar</p>
            <div class="input-group">
                <input type="text" placeholder="Nama Ikan" name="ikan" value="" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Jenis Ikan" name="jenis" value="" required>
            </div>
            <div class="input-group">
                Tempat Hidup Ikan    
            </div>
            <div class="input-group1">
                <input type="radio" id="tawar" name="asal" value="Ikan Air Tawar" required><label for="tawar">Air Tawar</label>
                <input type="radio" id="asin" name="asal" value="Ikan Air Asin" required><label for="asin">Air Asin</label>
            </div>
            <div class="input-group">
            <input type="number" placeholder="Berat Ikan (Kg)" name="berat" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="ID Ikan" name="id" value="" required>
            </div>
            <div class="input-group">
            <input type="number" placeholder="Harga Ikan per Kg" name="harga" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==40) return false;" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Daftar</button>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $_SESSION["ikan"] = $_POST['ikan'];
                $_SESSION["jenis"] = $_POST['jenis'];
                $_SESSION["berat"] = $_POST['berat']; 
                $_SESSION["id"] = $_POST['id'];
                $_SESSION["harga"] = $_POST['harga'];
                $_SESSION["asal"] = $_POST['asal'];
                header("Location: data.php");
            }
        ?> 
        </form>
    </div>
</body>
</html>