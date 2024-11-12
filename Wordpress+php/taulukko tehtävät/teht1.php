<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>


</body>
</html>

<?php
$oppilaat = array("Maija", "Teijo", "Anna", "Miro", "Saana");
sort($oppilaat);
foreach ($oppilaat as $oppilas)
{
    echo $oppilas . "<br>";
}

?>