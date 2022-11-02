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
 
    <title>Data</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">akun yang di daftarkan</p>
            <div class="input-group">
            Nama ikan : <?php echo($_SESSION['ikan']); ?>
            </div>
            <div class="input-group">
            Jenis ikan : <?php echo($_SESSION['jenis']); ?>
            </div>
            <div class="input-group">
            Berat ikan : <?php echo($_SESSION['berat']); ?>
            </div>
            <div class="input-group">
            ID ikan : <?php echo($_SESSION['id']); ?>
            </div>
            <div class="input-group">
            Harga ikan per Kg : <?php echo($_SESSION['harga']); ?>
            </div>
            <div class="input-group">
            Ikan hidup pada : <?php echo($_SESSION['asal']); ?>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Kembali</button>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                header("Location: ../");
            }
        ?> 
        </form>
    </div>
</body>
</html>