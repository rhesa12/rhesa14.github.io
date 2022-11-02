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
            username : <?php echo($_SESSION['username']); ?>
            </div>
            <div class="input-group">
            Nomor hp : <?php echo($_SESSION['nomor']); ?>
            </div>
            <div class="input-group">
            nama : <?php echo($_SESSION['nama']); ?>
            </div>
            <div class="input-group">
            password : <?php echo($_SESSION['password']); ?>
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