<?php
    session_start();
    
    
    if ($_SESSION['priv'] != 'admin'){
        header('Location: ../');
    }
    $id =$_GET['id'];
    require '../konek.php';
    if($mulai = mysqli_query($conn, "DELETE FROM `ikan` WHERE id = $ikan")){
        echo "<script>alert('data berhasil di hapus')
        document.location.href = '../ubah';</script>";
    }
    else{
        echo "<script>alert('data tidak berhasil di hapus')document.location.href = '../ubah';</script>";
    }
?>
