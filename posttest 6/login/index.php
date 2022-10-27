<?php 
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../");
}
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
 
    <title>Login</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <?php
            $username = array('admin' , 'user');
            $password = array('123', 'user');
            if (isset($_POST['submit'])) {
                if ($_POST['username'] == $username[0] && $_POST['password'] == $password[0]){
                    $_SESSION["username"] = $username[0];
                    $_SESSION["priv"] = 'admin'; 
                    $_SESSION["nama"] = $_POST['nama'];
                    header("Location: ../");
                }
                elseif ($_POST['username'] == $username[1] && $_POST['password'] == $password[1]){
                    $_SESSION["username"] = $username[1]; 
                    $_SESSION["priv"] = 'user';
                    $_SESSION["nama"] = $_POST['nama'];
                    header("Location: ../");
                }
                else {
                    echo("<p class='login-register-text'>email atau password anda salah.</p>");
                }
            }
            elseif (isset($_SESSION['username'])){
                header("Location: ../");
            }
        ?> 
        </form>
    </div>
</body>
</html>