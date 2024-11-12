<?php
session_start();
if (!isset($_SESSION['randomNum'])) {
    $_SESSION['randomNum'] = rand(1,10);
    $_SESSION['yritys'] = 0;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>

    <form action="" method="GET">
        Syötä numero(1-10): <input type="number" name="arvaus">
        <br>
        <input type="submit" name="lähetä">
    </form>
</body>
</html>

<?php



if (isset($_GET["lähetä"])) {
    $arvattu = $_GET["arvaus"];
    $_SESSION['yritys']++;
    $yritys = $_SESSION['yritys'];
    if ($arvattu == $_SESSION['randomNum'])
    {
        echo "jibbii";
        session_destroy();
    }
    elseif ($yritys >= 3)
    {
        echo "Arvasit 3 kertaa, hävisit sad face. Arvottu numero oli ", $_SESSION['randomNum'];
        session_destroy();
    }
    elseif ($arvattu > $_SESSION['randomNum'])
    {
        echo "Liian iso!";
    }
    elseif ($arvattu < $_SESSION['randomNum'])
    {
        echo "Liian pieni!";
    }
}


?>