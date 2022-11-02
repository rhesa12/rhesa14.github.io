<?php 
session_start();
require "konek.php";
$ikan = mysqli_query($conn, "SELECT * FROM `ikan`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atlantis.</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <p>
        
    </p>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>fresh water teories</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#market">Market</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php  
                    if(!isset($_SESSION['username'])){
                        echo('<li><a href="daftar">Daftar</a></li>');
                    }elseif ($_SESSION['priv'] == 'admin'){
                        echo '<li><a href="ubah">Ikan</a></li>';
                    }
                    ?>
                    
                    <?php if (isset($_SESSION['username'])){
                        echo('<li><a href="login/logout.php" class="tbl-biru">Logout</a></li>');
                        
                    }else{
                        echo('<li><a href="login" class="tbl-biru">Sign In</a></li>');
                    }
                    ?>
                    <li>
                        <label>
                            <input type="checkbox" class="checkbox" id="tombol">
                            <span class="check"></span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="blue-marlin-fish-jumping_43623-932.jpg"width="45%"/>
            <div class="kolom">
                <p class="deskripsi">The Rarest fish in the world market!</p>
                <h2>Fish world classs market in the world</h2>
                <p>Sebagian besar orang memilih ikan hias untuk dijadikan peliharaan di rumah
                    dan dapat memperindah suasana rumah serta membuatnya lebih nyaman. Memelihara jenis ikan hias juga bisa berguna untuk kesehatan tubuh loh. Ikan hias juga bisa membantu pemiliknya mengatasi stres dan juga menurunkan tekanan darah dan juga detak jantung.</p>
                <p><a href="javascript:alert('Mohon maaf fitur tersebut tidak bisa dibuka!!!');" class="tbl-pink">Search More!</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Class Fish</p>
                <h2>Fish sales service</h2>
                <p>Mengkonsumsi ikan memberikan banyak manfaat bagi tubuh kita. Hal ini dikarenakan ikan mengandung asam lemak yang baik bagi tubuh. Asam lemak ini akan membantu tubuh untuk menjaga kadar kolesterol. Komponen ini juga akan membuat otot lebih peka untuk merespons hormon insulin. Hal ini dapat memberikan dampak yang positif terhadap para penderita diabetes.</p>
                <p><a href="javascript:alert('Mohon maaf fitur tersebut tidak bisa dibuka!!!');" class="tbl-biru">View-more!</a></p>
            </div>
            <img src="shoal-fish-underwater_1360-19.jpg"width="45%">
        </section>

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">high Tier Fish</p>
                    <p>High class Rarest Fish!</p>
                </div>

                <div class="ikan-list">
                    <?php 
                         $i =1; while ($row = mysqli_fetch_assoc($ikan)) :
                    ?>
                    <div class="ikan-rare" id="pict<?php echo $i; ?>">
                    <img src="<?=$row['gambar']?>"/>
                    <p><?=$row['nama']?></p>
                    </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div>
        </section>

        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">aboout me</p>
                    <img src="Screenshot 2022-09-26 142638.png" width="20%"/>
                    <h2>Rhesa Simbolon</h2>
                    <p>Lahir di berau, Berjuang dalam mempelajari coding sendri.</p>
                </div>    
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>IKAN RHESA</h3>
                    <p>Website penjualan ikan dengan rating tertinggi di tokopedia, dan berhasil mencapai market dunia.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Whatsapp : +62 899-4107-711</p>
                </div>
                <div class="footer-section">
                    <h3>Address</h3>
                    <p>Jl. Perjuangan 9, Samarinda</p>
                    <p>Kode Pos: 666666</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>YouTube: </b>Program fresh water teories</p>
                </div>
            </div>
        </div>
    </div>
            
        </div>
    </div>
    <script src="posttet.js"></script>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("dark-mode");
        }
    </script>
</body>
</html>