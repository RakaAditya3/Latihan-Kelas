<form action="" method="post">
    <input type="number" name="bil1" placeholder="Bilangan 1">
    <input type="number" name="bil2" placeholder="Bilangan 2">
    <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
        <input type="submit" name="bagi" value="Bagi">
        <input type="submit" name="kali" value="Kali">
</form>

<?php

    if (isset($_POST['tambah'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil =$bil1 + $bil2;
        echo $hasil;
    }
    if (isset($_POST['kurang'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil =$bil1 - $bil2;
        echo $hasil;
    }
    if (isset($_POST['kali'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil =$bil1 * $bil2;
        echo $hasil;
    }
    if (isset($_POST['bagi'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil =$bil1 / $bil2;
        echo $hasil;
    }

?>