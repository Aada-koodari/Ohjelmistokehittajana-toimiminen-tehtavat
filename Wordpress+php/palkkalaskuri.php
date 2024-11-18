<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>
<form action="" method="GET">
    Nimi: 
    <br><input type="text" name="name">
    <br>
    Sukupuoli: 
    <br>
    <input type="radio" id="woman" name="gender" value="woman">
    <label for="woman">nainen</label><br>
    <input type="radio" id="man" name="gender" value="man">
    <label for="man">mies</label><br>
    <input type="radio" id="neither" name="gender" value="neither">
    <label for="neither">muu</label>
    <br>
    Ikä: 
    <br><input type="number" name="age" min="1" max="110">
    <br>
    Veroprosentti: 
    <br><input type="number" name="prosentti">
    <br>
    Kuukausipalkka: 
    <br><input type="number" name="palkka">
    <br>
    <br>
    <input type="submit">
    </form>

</body>
</html>

<?php
$Name = $_GET["name"];
$Gender = $_GET["gender"];
$Age = $_GET["age"];
$Prosentti = $_GET["prosentti"] / 100;
$Palkka = $_GET["palkka"];
$ageText = "";

if (isset($_GET["woman"])) {
    if ($Age > 13) {
        $ageText = "Mitä Neiti";
    }
    elseif (13 <= $Age && $Age <= 25) {
        $ageText = "Mitä nuorineiti";
    }
    elseif (26 <= $Age && $Age <= 56) {
        $ageText = "Olet nainen parhaassa iässä";
    }
    elseif (70 <= $Age) {
        $ageText = "Olet jo eläke iässä";
    }
}
elseif (isset($_GET["man"])) {
    if ($Age > 13) {
        $ageText = "Mitä poitsu";
    }
    elseif (13 <= $Age && $Age <= 25) {
        $ageText = "Mitä nuorimies";
    }
    elseif (26 <= $Age && $Age <= 56) {
        $ageText = "Olet mies parhaassa iässä";
    }
    elseif (70 <= $Age) {
        $ageText = "Olet jo eläke iässä";
    }
}
else {
    if ($Age < 13) {
        $ageText = "Mitä jäbä";
    }
    elseif (13 <= $Age && $Age <= 25) {
        $ageText = "Mitä nuorekainen";
    }
    elseif (26 <= $Age && $Age <= 56) {
        $ageText = "Olet parhaassa iässä";
    }
    elseif (70 <= $Age) {
        $ageText = "Olet jo eläke iässä";
    }
};


$brutto = $Palkka * 12.5;
$netto = $brutto - ($Prosentti * $brutto);

echo "Hei " . $Name. ", " . $ageText. ". Bruttopalkkasi on " . $brutto . " eur ja nettopalkkasi on " . $netto . " eur.";
?>
