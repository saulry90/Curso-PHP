<!-- 1- Introducir los números del 1 al 10 en una matriz mediante un bucle
2- Mostrar la matriz

3- Crear una matriz con 5 números aleatorios utilizando la función rand()
4- Sacar por pantalla la media de los números
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actmatriz</title>
</head>
<body>
    <h1>actmatriz</h1>
    <?php
    echo "Números del 1 al 10:<br>";
    for($i=1;$i<=10;$i++){
        $numero=array(); 
        echo "·".$numero[$i]=$i;
    }
    echo "<br><br>Números aleatorios:<br>";
    $numero=array(); 
    for($i=1;$i<=5;$i++){
        $num_aleatorio=rand(1,100);
        $numero[]=$num_aleatorio;
        echo "·".$num_aleatorio;
        $media=(array_sum($numero))/count($numero);
    }
        echo "<br>La media es: ".$media;
    ?>
    
</body>
</html>