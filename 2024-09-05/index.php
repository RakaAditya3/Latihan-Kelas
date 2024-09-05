<?php 
    for ($i=0; $i < 10; $i++) { 
        echo "<br>";
        echo $i;
    }
    echo "<br>";

    for ($i=10; $i > 0; $i--) { 
        echo "<br>";
        echo $i;
    }

    echo "<br>";

    $ganjil = 7%2;
    echo $ganjil;

    echo "<br>";

    for ($i=1; $i < 100; $i++) { 
        $ganjil = $i % 2;
        //echo $ganjil;

        if ($ganjil == 0) {
            echo $i;
        }
    }

    echo "<br>";

    $kkm = 80;
    $nilai = 90;

    if ($nilai > $kkm) {
        echo "Kamu Lulus";
    } else {
        echo "Gak Lulus";
    }

    echo "<br>";

    $status = "Tidak Lulus";

    if ($nilai > $kkm) {
        $status = "Lulus";
        echo $status;
    }

    echo "<br>";

    $rapot = 0;
    $tugas = 1;

    if ($tugas == 1) {
        $rapot = 80;
    }
echo $rapot;

    echo "<br>";

    $bulan = 12;
    $tanggal = 25;
    $keterangan =  "salah";

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

        }
    }
    echo $keterangan;
?>