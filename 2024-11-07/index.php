<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Porong</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"> <img src="images/logo.jpg" alt=""></a>
            </div>
            <div class="sekolah">
                SMP Negeri 3 Porong
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=Home">Home</a></li>
                    <li><a href="?menu=Sejarah">Sejarah</a></li>
                    <li><a href="?menu=Kegiatan">Kegiatan</a></li>
                    <li><a href="?menu=Jadwal">Jadwal</a></li>
                    <li><a href="?menu=Galeri">Galeri</a></li>
                    <li><a href="?menu=Contact">Contact</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
            if (isset($_GET['menu'])) {
                $menu = $_GET['menu'];
                if ($menu == 'Home') {
                    require_once("pages/Home.php");
                }
                if ($menu == 'Sejarah') {
                    require_once("pages/Sejarah.php");
                }
                if ($menu == 'Kegiatan') {
                    require_once("pages/Kegiatan.php");
                }
                if ($menu == 'Jadwal') {
                    require_once("pages/Jadwal.php");
                }
                if ($menu == 'Galeri') {
                    require_once("pages/Galeri.php");
                }
                if ($menu == 'Contact') {
                    require_once("pages/Contact.php");
                }
            } else {
                    require_once("pages/Home.php");
            }

            ?>
        </div>
        <div class="footer">
            <p>WEB INI DIBUAT OLEH : RAKA ADITYA</p>
        </div>
    </div>
</body>
</html>