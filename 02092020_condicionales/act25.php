<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2-5</title>
</head>
<body>
    <h1>Actividad 2-5</h1>
    <?php
    $salario=100;

    if ($salario<=1500) {
        echo "<p>Tu salario es ".$salario."€. Lo que supone un aumento de 20%. Tu salario actual es: ".($salario*0.2+$salario)."€</p>";
    }
    elseif ($salario>500&&$salario<=1000){
        echo "<p>Tu salario es ".$salario."€. Lo que supone un aumento de 10%. Tu salario actual es: ".($salario*0.1+$salario)."€</p>";
    }
    elseif ($salario>1000&&$salario<=1500){
        echo "<p>Tu salario es ".$salario."€. Lo que supone un aumento de 5%. Tu salario actual es: ".($salario*0.05+$salario)."€</p>";
    }
    elseif ($salario>1500){
        echo "<p>Tu salario es ".$salario."€. Lo que supone un aumento de 3%. Tu salario actual es: ".($salario*0.03+$salario)."€</p>";
    }
    else {
        echo "<p>Introduce un salario correcto</p>";
    }
    ?>
    
</body>
</html>