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
<body>

    <form action="" method="GET">
        Tuote: <input type="text" name="tuoteNimi">
        Määrä: <input type="number" name="tuoteMäärä">
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
    $_SESSION['tuotteet'][] = ["nimi" => $_GET["tuoteNimi"], "määrä" => $_GET["tuoteMäärä"]];
    //array_push($tuotteet, array());
    //$lista = $_SESSION['tuotteet'];
    
};
if (isset($_GET["poista"])) {
    $key = array_search($_GET["tuoteNimi"], $tuotteet);
    unset($_SESSION['tuotteet'][$key + 1]);
    
};
if (isset($_GET["poistaKaikki"])) {
    session_destroy();
    
};
if (isset($_GET["hae"])) {
    array_push($tuotteet, array("nimi" => $_GET["tuoteNimi"], "määrä" => $_GET["tuoteMäärä"]));
    
};
foreach ($tuotteet as $tuoteTiedot) {
    echo $tuoteTiedot["nimi"] . " x" . $tuoteTiedot["määrä"] . "<br>";
};

//ostoslista tuote = echo $tuote . " x" . $määrä;

//poista kaikki = session_destroy();


?>