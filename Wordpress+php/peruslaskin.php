<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>
    <form action="" method="GET">
    Numero 1: <input type="number" name="numb1">
    <br>
    Numero 2: <input type="number" name="numb2">
    <br>
    <input type="submit">
    </form>

</body>
</html>

<?php
        $numero1 = $_GET["numb1"];
        $numero2 = $_GET["numb2"];
        echo "Numero 1: ", $numero1, "<br>";
        echo "Numero 2: ", $numero2, "<br>";
        echo "Numeroiden summa: ", $numero1 + $numero2, "<br>";
        echo "Numeroiden erotus: ", $numero1 - $numero2, "<br>";
        echo "Numeroiden kertolasku: ", $numero1 * $numero2, "<br>";
        echo "Numeroiden jakolasku: ", $numero1 / $numero2;


?>