<?php
    require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAKA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <h1>Ini adalah Hidden</h1>
    <li><a href="?"</a>Home</li>
    <?php
        foreach ($pages as $key => $value) {
    ?>
        <li><a href="?page=<?= $value?>"><?= $key?></a></li>
    <?php
        }
    ?>
    </div>
    <div class="content">
    <h1>Ini adalah Content</h1>
    <?php
        if (isset($_GET["page"])){
            $page = $_GET["page"];
            if ($page == "contact"){
                require_once('pages/contact.php');
            }
            if ($page == "jurusan"){
                require_once('pages/jurusan.php');
            }
            if ($page == "sejarah"){
                require_once('pages/sejarah.php');
            }
            if ($page == "prestasi"){
                require_once('pages/prestasi.php');
            }
        } else {
            echo "<h2>Ini Adalah Home</h2>";
        }
    ?>
    </div>
    <div class="footer">
    <h1>Ini adalah Footer</h1>
    </div>
    <?php
        foreach ($pages as $key => $value) {
    ?>
        <li><a href="pages/<?= $value?>"><?= $key?></a></li>
    <?php
        }
    ?>
    <?php
    foreach ($gambars as $key) {
    ?>
    <img src="images/<?= $key?>" alt="">

    <?php
        }
    ?>
</body>
</html>