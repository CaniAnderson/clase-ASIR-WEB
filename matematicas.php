<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
</head>
<body>
<?php

echo "Ejemplo bucle while"."<br>";

$numero=0;

while ($numero <= 10) {
    # Paso 1: Mostrar mi numero
    echo "Mi numero es: ".$numero."<br>";
    # Paso 2: Actualizar la variable numero
    $numero++;

    #$numero++ = $numero=$numero+1;
}

echo "Mi cuenta ha terminado."."<br>"."<br>";

echo "Ejemplo bucle while"."<br>";

$numero1=0;

while ($numero1 <= 100) {
    # Paso 1: Mostrar mi numero
    echo "Mi numero es: ".$numero1."<br>";
    # Paso 2: Actualizar la variable numero
    $numero1+=5;

    #$numero1+=5 = $numero1=$numero1+5;
}

echo "Mi cuenta ha terminado."."<br>"."<br>";

echo "Ejemplo bucle while"."<br>";

$numero2=0;
$aleatorio = rand(0,100);

echo "Mi numero aleatorio es: ".$aleatorio."<br>";

while ($numero2 <= $aleatorio) {
    # Paso 1: Mostrar mi numero
    echo "Mi numero es: ".$numero2."<br>";
    # Paso 2: Actualizar la variable numero
    $numero2+=5;

    #$numero1+=5 = $numero1=$numero1+5;
}

echo "Mi cuenta ha terminado."."<br>"."<br>";

echo "Ejemplo for"."<br>";

for ($cuenta=0; $cuenta < 10; $cuenta++) { 
    # Accion
    print "Imprime la cuenta: ".$cuenta."<br>";
}


echo "<br>"."<br>"."Ejemplo function"."<br>";

$nombre="Miguel";
$edad=25;
$esMayor=true;

function persona($nombre,$edad){

    echo "Su nombre es: ".$nombre;

    if ($edad % 2){
        
        echo " y su edad es impar"."<br>";

    }else{

        echo " y su edad es par"."<br>";

    }

}

#Funcion presentate
function presenta($nombre,$apellidos,$localidad){

    echo "Mi nombre es: ".$nombre." ".$apellidos. " y soy de ".$localidad."<br>";

}

function suma($num1,$num2){

    $res= $num1 + $num2;

    echo "El resultado es: ".$res."<br>";

}

persona("Miguel",25);
persona("Manuel",23);
persona("Adan",22);
persona("Manule",257);

presenta("Miguel", "Bocachancla", "Lora de Estepa");

suma (3,2);
suma (3,3);

echo "<br>"."<br>"; 

$alumnos = array("Nacho","Gonzalo","Javi","Adan","Manule","Ivan");

echo "La cantidad de alumnos es: ";
echo count($alumnos)."<br>";

$selectAleatorio = rand(0,5);

echo "El alumno es: ".$alumnos[$selectAleatorio];

echo "<br>"."<br>"; 

$numero3=3;

function esNumero($numero){

    if (is_integer($numero)) {
        echo "Es numero";
    } else {
        echo "No es numero";
    }
    
}

esNumero(3);

echo "<br>"."<br>"; 

if ($numero3>5) {
    echo "Hola";
} else {
    echo "Adiós";
}


?>

<br><br><a href="Web ASIR.html">Volver a la página principal</a>
</body>
</html>