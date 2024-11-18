<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>
<h3>Oppilaiden tiedot:</h3>
<form method="post">
    <input type="submit" name="sort" value="Nimi a-ö"/>
    <input type="submit" name="sort" value="Nimi ö-a"/>
    <input type="submit" name="sort" value="Keskiarvo a-ö"/>
    <input type="submit" name="sort" value="Keskiarvo ö-a"/>
</form>

</body>
</html>

<?php
// Oppilaiden tiedot
$students = array(
    array("nimi" => "Maija", "koe1" => 7, "koe2" => 8, "koe3" => 9),
    array("nimi" => "Anna", "koe1" => 7, "koe2" => 5, "koe3" => 6),
    array("nimi" => "Peetu", "koe1" => 5, "koe2" => 10, "koe3" => 6),
);

// Lisätään keskiarvot taulukkoon
foreach ($students as &$student) {
    $student['keskiarvo'] = ($student['koe1'] + $student['koe2'] + $student['koe3']) / 3;
}
unset($student); // Poistetaan viite viimeisestä elementistä

// Tarkistetaan, onko lomakkeesta tullut pyyntö
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sort'])) {
        $sort = $_POST['sort'];
        if ($sort == "Nimi a-ö") {
            // Lajitellaan nimen mukaan
            usort($students, function($a, $b) {
                return strcmp($a['nimi'], $b['nimi']);
            });
        } elseif ($sort == "Nimi ö-a") {
            uasort($students, function($b, $a) {
                return strcmp($b['nimi'], $a['nimi']);
            });
        } elseif ($sort == "Keskiarvo a-ö") {
            // Lajitellaan keskiarvon mukaan
            usort($students, function($a, $b) {
                return $b['keskiarvo'] <=> $a['keskiarvo'];
            });
        } elseif ($sort == "Keskiarvo ö-a") {
            // Lajitellaan keskiarvon mukaan
            uasort($students, function($b, $a) {
                return $a['keskiarvo'] <=> $b['keskiarvo'];
            });
        }
    }

    // Tulostetaan taulukko
    foreach ($students as $student) {
        echo $student['nimi'] . ": Keskiarvo: " . number_format($student['keskiarvo'], 2) . ".<br>";
    }
}
?>
