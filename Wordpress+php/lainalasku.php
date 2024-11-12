<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>

    <form action="" method="GET">
    lainan summa: <input type="number" name="summa">
    <br>
    lainan korko: <input type="number" name="korko">
    <br>
    lainan kesto(vuosina): <input type="number" name="kesto">
    <br>
    <input type="submit">
    </form>
</body>
</html>

<?php

        $P = $_GET["summa"];
        $r = $_GET["korko"];
        $n = $_GET["kesto"];
        $M = $P * ( $r*pow((1 + $r),$n) / pow((1 + $r),$n) - 1 );
        echo "Lainan summa on ", $P, "<br>";
        echo "Lainan korko on ", $r, "<br>";
        echo "Lainan kesto on ", $n, "<br>";
        echo "Kuukausittainen maksuerä on ", $M, "%";
// M = P * ( r*(1+r)^n / (1+r)^n−1 )
// echo(pow((1+r),n) . "<br>")
/* M = kuukausittainen maksuerä
P = lainan pääoma (kokonaismäärä)
r = kuukausittainen korko (vuosikorko jaettuna 12)
n = lainan kuukausien määrä (vuodet kerrottuna 12)
*/

?>