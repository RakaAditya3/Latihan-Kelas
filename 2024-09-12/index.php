<form action="" method="post">
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal !">
    <input type="number" name="bulan" placeholder="Masukkan Bulan !">
    <input type="submit" value="kirim" name="simpan">
</form>

<?php

    if (isset($_POST['simpan'])) {
        $bulan = $_POST['bulan'];
        $tanggal = $_POST['tanggal'];
        if ($bulan > 0 && $bulan < 13) {
            //$keterangan = "benar";
            if ($tanggal > 0 && $tanggal < 32) {
                //$keterangan = "benar";
                if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Aquarius";
                }
                if ($bulan == 1 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Capricorn";
                }
                if ($bulan == 2 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Pisces";
                }
                if ($bulan == 2 && $tanggal > 20 && $tanggal < 30) {
                    $keterangan = "Gemini";
                }
                if ($bulan == 3 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Libra";
                }
                if ($bulan == 3 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Virgo";
                }
                if ($bulan == 4 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Aquarius";
                }
                if ($bulan == 4 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Virgo";
                }
                if ($bulan == 5 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Libra";
                }
                if ($bulan == 5 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Sagitarius";
                }
                if ($bulan == 6 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Niggarius";
                }
                if ($bulan == 6 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Scorpio";
                }
                if ($bulan == 7 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Aquarius";
                }
                if ($bulan == 7 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Blackyrius";
                }
                if ($bulan == 8 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "WhitieRius";
                }
                if ($bulan == 8 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Rayrus";
                }
                if ($bulan == 9 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Fayrus";
                }
                if ($bulan == 9 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Kayrus";
                }
                if ($bulan == 10 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Surrus";
                }
                if ($bulan == 10 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Barus";
                }
                if ($bulan == 11 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Darus";
                }
                if ($bulan == 11 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Rafus";
                }
                if ($bulan == 12 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Mekrus";
                }
                if ($bulan == 12 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Kontrus";
                }
            } else {
                echo "Tanggal yang Anda Masukkan Salah !";
            }
        } else {
            echo "Bulan yang Anda Masukkan Salah !";
        }
        echo "<br>";
        echo 'Zodiak Anda Adalah : '.$keterangan;
    }
?>












<!-- 
<div style="margin-top: 50x;">
<form action="" method="post">
    Nama :
    <input type="text" placeholder="Masukkan Nama !" name="Nama">
    <input type="text" name="Alamat" placeholder="Masukkan Alamat !">
    <input type="email" name="Email" placeholder="Masukkan Email !">
    <input type="password" name="Password" placeholder="Masukkan Password !">
    <input type="submit" value="kirim" name="Tombol">
</form>
</div>

        // echo "Belajar PHP";
        // if(isset($_POST['Tombol'])){
        //     $nama = $_POST['Nama'];
        //     $alamat = $_POST['Alamat'];
        //     $email = $_POST['Email'];
        //     $password = $_POST['Password'];
    
        //     echo "Nama Anda Adalah : ".$nama;
        //     echo "<br>";
        //     echo "Alamat Anda Adalah : " .$alamat;
        //     echo "<br>";
        //     echo "Email Anda Adalah : " .$email;
        //     echo "<br>";
        //     echo "Password Anda Adalah : " .$password;
        // }
 -->