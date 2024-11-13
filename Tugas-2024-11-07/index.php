<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 3 Porong</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon.png"  type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"> <img src="images/LogoSMK.png" alt=""></a>
            </div>
            <div class="sekolah">
            "Unggul, Mumpuni, Berkarakter"
            </div>
        </div>
        <div class="nav">
                <ul>
                    <li><a href="?menu=ProfilSekolah">Profil Sekolah</a></li>
                    <li><a href="?menu=Kerjasama">Kerjasama</a></li>
                    <li><a href="?menu=Kegiatan">Tour Sekolah</a></li>
                    <li><a href="?menu=Jadwal">Konsentrasi Ahlian</a></li>
                    <li><a href="?menu=Galeri">Bidang</a></li>
                    <li><a href="?menu=Contact">Fitur - Fitur</a></li>
                    <li><a href="?menu=Contact">Administrasi</a></li>
                    
                </ul>
            </div>
        <div class="content">
            <?php
            if (isset($_GET['menu'])) {
                $menu = $_GET['menu'];
                if ($menu == 'ProfilSekolah') {
                    require_once("pages/ProfilSekolah.php");
                }
                if ($menu == 'Kerjasama') {
                    require_once("pages/Kerjasama.php");
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