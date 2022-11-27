<?php

if (isset($_GET['page'])) {
    $strona = $_GET['page'];
} else {
    $strona = "stronaglowna";
}
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

    <section class="header">
        <nav>
            <img src="gryf4.png" class="logo">

            <ul class="nav-links">
                <li><a href="index.php?page=stronaglowna"> Strona główna </a></li>
                <li><a href="index.php?page=kontakt"> Kontakt</a></li>
                <li><a href="index.php?page=ciekawostki">Ciekawostki</a></li>
                <li><a href="index.php?page=mapa">Mapa</a></li>
                <li class="btn"><a href="logowanie.php">Zaloguj się</a></li>
            </ul>
        </nav>
    </section>
    <section class="content">
        <?php
        if ($strona != null) {
            include($strona . '.php');
        } else {
            include('stronaglowna.php');
        }




        ?>

    </section>
</body>

</html>