<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3-1 (Jugando con bucles)</title>
</head>
<body>
    <h1>Actividad 3-1 (Jugando con bucles)</h1>
    <?php
    $i=1;
    while ($i <= 10) {
        echo "·".$i++." ";
    }
    echo "<p></p>";
    for ($i=60;$i<=70;$i++) {
        echo "·".$i." ";
    }
    echo "<p></p>";
    for ($i=20;$i>=1;$i--) {
        echo "·".$i." ";
    }
    echo "<p></p>";
    for ($i=1;$i<=10;$i++) {
        echo "·5x".$i."=".($i*5)."///";
    }
    echo "<p></p>";
    $total=0;
    for ($i=1;$i<=100;$i++) {
        $total+=$i;
        echo "·".$total." ";
    }
    ?>
    
</body>
</html>