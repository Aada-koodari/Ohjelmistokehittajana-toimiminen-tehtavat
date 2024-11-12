<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>


</body>
</html>

<?php
$oppilaat = array("nimi" => "Maija", "koe1" => 9, "koe2" => 8, "koe3" => 10);
sort($oppilaat);
foreach ($oppilaat as $oppilas)
{
    echo $oppilas . "<br>";
}

?>