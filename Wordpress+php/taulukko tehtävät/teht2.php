<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>

<form method="post">
        <input type="submit" name="a-ö"
                value="a-ö"/>
        
        <input type="submit" name="ö-a"
                value="ö-a"/>
    </form>

</body>
</html>

<?php
$auto = array("merkki" => "merkki", "malli" => "malli", "vuosi" => 1894);
if(isset($_POST['a-ö'])) {
    function sortArray($auto)
    {
        $tiedot1 = "";
        $merkki = $auto["merkki"];
        $malli = $auto["malli"];
        $vuosi = $auto["vuosi"];
        echo "auton tiedot: ", $merkki, ", ", $malli, ", ", $vuosi;
    };
}
if(isset($_POST['ö-a'])) {
    function reverseArray($auto)
    {
        $tiedot2 = "";
        $merkki = $auto["merkki"];
        $malli = $auto["malli"];
        $vuosi = $auto["vuosi"];
        echo "auton tiedot: ", $vuosi, ", ", $malli, ", ", $merkki;
    };
}

echo "auton tiedot: ";
?>