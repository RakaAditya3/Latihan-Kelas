<div style="text-align:center;">
    <form action="" method="post">
        <input type="number" name="angka1" placeholder="Masukkan Angka 1">
        <input type="number" name="angka2" placeholder="Masukkan Angka 2">
        <br>
        <div style="margin-top : 20px;">
        <input type="submit" name="kirim" value="Tambah">
        <input type="submit" name="kirim1" value="Kurang">
        <input type="submit" name="kirim2" value="Bagi">
        <input type="submit" name="kirim3" value="Kali">
        </div>
    </form>



<?php
    if (isset($_POST['kirim'])) {
        $tambah = $_POST['angka1'] + $_POST['angka2'];
        echo "<h1>".$tambah;
    }
    if (isset($_POST['kirim1'])) {
        $kurang = $_POST['angka1'] - $_POST['angka2'];
        echo "<h1>".$kurang."</h1>";
    }
    if (isset($_POST['kirim2'])) {
        $bagi = $_POST['angka1'] / $_POST['angka2'];
        echo "<h1>".$bagi."</h1>";
    }
    if (isset($_POST['kirim3'])) {
        $kali = $_POST['angka1'] * $_POST['angka2'];
        echo "<h1>".$kali."</h1>";
    }
?>
</div>