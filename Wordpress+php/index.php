<!DOCTYPE html>
<html>
    <head>
        <title>Eka PHP-sivu</title>
    </head>
<body>
    <p>Vuorokaudessa on <?php echo 24 * 60 * 60; ?> sekuntia.</p>
    <p>Tänään on <?php echo date("j.n.Y"); ?>.</p>
    <p>PHP:n versio <?php echo PHP_VERSION; ?>.</p>

</body>
</html>

<?php
        echo "<ul>";
        for ($i = 1; $i <= 20; $i++)
        {
            echo "<li>" . $i;
        }
        echo "</ul>";
    ?>