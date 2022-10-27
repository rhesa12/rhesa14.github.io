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
                <input type="text" placeholder="Username" name="username" value="" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" value="" required>
            </div>
            <div class="input-group">
            <input type="number" placeholder="Nomor hp" name="nomor" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Daftar</button>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["nama"] = $_POST['nama']; 
                $_SESSION["nomor"] = $_POST['nomor'];
                $_SESSION["password"] = $_POST['password'];
                header("Location: data.php");
            }
        ?> 
        </form>
    </div>
</body>
</html>