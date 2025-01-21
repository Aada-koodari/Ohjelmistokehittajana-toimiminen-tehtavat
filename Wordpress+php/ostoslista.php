<?php
session_start();
if (!isset($_SESSION["tuotteet"])) {
    $_SESSION['tuotteet'] = array();
}
//$tuotteet = $_SESSION['tuotteet'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>

    <style>
        body {
            background-color: #FCFCFC;
            color: #353F4B;
        }
        input {
            background-color: #CAC1CD;
            color: #13171B;
        }

    </style>
<body>

    <form action="" method="GET">
        Tuote: <input type="text" name="tuoteNimi" placeholder="Tuotteen nimi">
        Määrä: <input type="number" name="tuoteMäärä" placeholder="Tuotteen määrä">
        <br>
        <br>
        <input type="submit" name="lisää" value="lisää">
        <input type="submit" name="poista" value="poista">
        <input type="submit" name="poistaKaikki" value="poista kaikki">
        <input type="submit" name="hae" value="hae">
    </form>
</body>
</html>

<?php

$tuotteet = $_SESSION['tuotteet'];

if (isset($_GET["lisää"])) {
    $nimi = $_GET["tuoteNimi"];
    $määrä = intval($_GET["tuoteMäärä"]);
    $_SESSION['tuotteet'][] = ["nimi" => $nimi, "määrä" => $määrä];
};

if (isset($_GET["poista"])) {
    $nimi = $_GET["tuoteNimi"];
    foreach ($_SESSION['tuotteet'] as $key => $tuote) {
        if ($tuote['nimi'] === $nimi) {
            unset($_SESSION['tuotteet'][$key]);
            $_SESSION['tuotteet'] = array_values($_SESSION['tuotteet']);
            break;
        }}
};

if (isset($_GET["poistaKaikki"])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
    
};

if (isset($_GET["hae"])) {
    $nimi = $_GET["tuoteNimi"];
    $määrä = intval($_GET["tuoteMäärä"]);
    $löyty = false;
    foreach ($_SESSION['tuotteet'] as $key => $tuote) {
        if ($tuote['nimi'] === $nimi) {
            echo "<br>" . htmlspecialchars($tuote["nimi"]) . " - " . intval($tuote["määrä"]) . " kpl";
            $löyty = true;
            break;
        }
    }
    if (!$löyty) {
        echo "<br>Tuotetta " . htmlspecialchars($nimi) . " ei löytynyt. :(<br>";
    }
};

if (!empty($_SESSION['tuotteet'])) {
    echo "<h3>Ostoslista:</h3>";
    foreach ($_SESSION['tuotteet'] as $tuote) {
        echo htmlspecialchars($tuote["nimi"]) . " - " . intval($tuote["määrä"]) . " kpl<br>";
    }
} else {
    echo "<h3>Ostoslista on tyhjä.</h3>";
}

//ostoslista tuote = echo $tuote . " x" . $määrä;

//poista kaikki = session_destroy();


?>