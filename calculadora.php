<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form method="POST">
        <fieldset>
            <legend>Calculadora</legend>
            <p><label for="fname">Número 1:</label>
            <input type="text" id="fname" name="fname"></p>
            <p><label for="lname">Número 2:</label>
            <input type="text" id="lname" name="lname"></p>
            <p>Operaciones:</p>
            <p><input type="button" name="" value="+">
            <input type="button" name="" value="-">
            <input type="button" name="" value="x">
            <input type="button" name="" value="/">
            <input type="button" name="" value="%">
            <input type="button" name="" value="Fibonacci"></p>
            <p><input type="submit" name="" value="Resolver"></p>
        </fieldset>
        <h3>Resultado: </h3>
        <p><a href="Web ASIR.html">Volver a la página principal</a></p>
    </form>


<?php

#Paso1: Elegir un metodo, en nuestro caso POST

#Paso2: Recogemos del formulario los datos
$var1=$_POST["fname"];
$var2=$_POST["lname"];

#Paso3: Representar/usar la informacion

echo "El resultado es: "."<br>"."<br>";

function suma($num1,$num2){

    $res= $num1 + $num2;

    echo "El resultado es: ".$res."<br>";

}

suma (3,2);
suma (3,3);

function raiz($num1){

    $res= sqrt($num1);

    echo "El resultado es: ".$res."<br>";

}

raiz (9);
raiz (25);

function cuadr($num1){

    $res= pow($num1, 2);

    echo "El resultado es: ".$res."<br>";

}

cuadr(3);
cuadr(5);

function cubo($num1){

    $res= pow($num1, 3);

    echo "El resultado es: ".$res."<br>";

}

cubo(3);
cubo(5);

function elev($num1, $num2){

    $res= pow($num1, $num2);

    echo "El resultado es: ".$res."<br>";

}

elev(3,5);
elev(5,10);

function fibonacci($num1){

    $n1 = 0;
    $n2 = 1;
    $n3 = 0;

    while ($num1 > 0){

        $n3 = $n2 + $n1;
        $n2 = $n1;
        $n1 = $n3;

        $num1--;
        
        echo $n3.", ";
    }
}
echo "0, ";
 
fibonacci(10-1);

?>

</body>
</html>