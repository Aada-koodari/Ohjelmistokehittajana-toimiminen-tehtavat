<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>


</body>
</html>

<?php
$maat = array(
    array("Index" => "Index", "Country" => "Country", "Capital" => "Capital", "Population" => "Population"),
    array("Index" => 0, "Country" => "Suomi", "Capital" => "Helsinki", "Population" => "1 300 000"),
    array("Index" => 1, "Country" => "Ruotsi", "Capital" => "Stockholm", "Population" => "1 700 000"),
    array("Index" => 2, "Country" => "Norja", "Capital" => "Oslo", "Population" => "1 100 000"),
    array("Index" => 3, "Country" => "Tanska", "Capital" => "Copenhagen", "Population" => "1 390 000"),
    array("Index" => 4, "Country" => "Islanti", "Capital" => "Reykjavik", "Population" => "400 000"),
);

foreach ($maat as $maaTiedot)
{
    echo $maaTiedot["Index"] ." ". $maaTiedot["Country"] ." ". $maaTiedot["Capital"] ." ". $maaTiedot["Population"] . "<br>";
}
/*Index	Country	Capital	Population
0	Suomi	Helsinki	1 300 000
1	Ruotsi	Stockholm	1 700 000
2	Norja	Oslo	1 100 000
3	Tanska	Copenhagen	1 390 000
4	Islanti	Reykjavik	400 000*/
?>
