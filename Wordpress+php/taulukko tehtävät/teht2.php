<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>

<form method="post">
    <input type="submit" name="a-ö" value="a-ö"/>
    <input type="submit" name="ö-a" value="ö-a"/>
</form>

<?php
// Auton tiedot
$auto = array(
    "merkki" => "Ford",
    "malli" => "Mustang",
    "vuosi" => 1964
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['a-ö'])) {
        ksort($auto); // Järjestä a-ö avainten mukaan
        echo "<h3>Auton tiedot a-ö:</h3>";
    } elseif (isset($_POST['ö-a'])) {
        krsort($auto); // Järjestä ö-a avainten mukaan
        echo "<h3>Auton tiedot ö-a:</h3>";
    }

    // Tulosta auton tiedot
    echo "<ul>";
    foreach ($auto as $avain => $arvo) {
        echo "<li><strong>$avain</strong>: $arvo</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
