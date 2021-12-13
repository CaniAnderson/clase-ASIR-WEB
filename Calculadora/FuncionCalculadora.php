<?php
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
?>