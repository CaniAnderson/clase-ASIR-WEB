<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<?php

#Paso1: Elegir un metodo, en nuestro caso POST

#Paso2: Recogemos del formulario los datos

#Paso3: Representar/usar la informacion


function suma($num1,$num2){

    $res= $num1 + $num2;

    echo "El resultado es: ".$res."<br>";

}


function resta($num1,$num2){

    $res= $num1 - $num2;

    echo "El resultado es: ".$res."<br>";

}

function multiplicacion($num1,$num2){

    $res= $num1 * $num2;

    echo "El resultado es: ".$res."<br>";

}

function division($num1,$num2){

    $res= $num1 / $num2;

    echo "El resultado es: ".$res."<br>";

}

function porcentaje($num1,$num2){

    $res= $num1 % $num2;

    echo "El resultado es: ".$res."<br>";

}


function raiz($num1){

    $res= sqrt($num1);

    echo "El resultado es: ".$res."<br>";

}


function cuadr($num1){

    $res= pow($num1, 2);

    echo "El resultado es: ".$res."<br>";

}


function cubo($num1){

    $res= pow($num1, 3);

    echo "El resultado es: ".$res."<br>";

}


function elev($num1, $num2){

    $res= pow($num1, $num2);

    echo "El resultado es: ".$res."<br>";

}


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


$var1=$_POST["fname"];
$var2=$_POST["lname"];
$selector=$_POST["operador"];

switch ($selector) {
    case '+':
        suma ($var1,$var2);
        break;
    case '-':
        resta ($var1,$var2);
        break;
    case 'x':
        multiplicacion ($var1,$var2);
        break;
    case '/':
        division ($var1,$var2);
        break;
    case '%':
        porcentaje ($var1,$var2);
        break;
    case '√':
        raiz ($var1);
        break;
    case 'n2':
        cuadr ($var1);
        break;
    case 'n3':
        cubo ($var1);
        break;
    case 'xn':
        elev ($var1, $var2);
        break;
    case 'fibonacci':
        echo "0, ";
        fibonacci ($var1-1);
        break;

    default:
        break;
}

?>

<p><a href="calculadora.html">Volver a la Calculadora</a></p>

</body>
</html>