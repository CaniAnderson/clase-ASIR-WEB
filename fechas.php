<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Fechas</title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fechas</h2>

<p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
<br>



<?php

echo "Vamos a trabajar con fechas"."<br>";
echo "Hoy es: ".date("l")."<br>";
echo "Dime la fecha actual: ".date("Y/n/d")."<br>";
echo "Dime la fecha actual: ".date("d/n/Y")."<br>";


echo "<br>"."<br>"."Ejercicio ejemplo if"."<br>"."<br>"."<br>";

$hora = date("H:i:s");

if($hora<"15"){
    echo "Lo siento, sigo en clases"."<br>";
    echo "Hora: ".$hora;
}else{
    echo "Estoy en mi casa"."<br>";
}


echo "<br>"."<br>"."Ejercicio ejemplo if-else"."<br>"."<br>";

$segundos = date("s");

if($segundos<"10"){
    echo "Primeros 10 segundos"."<br>";
    echo "Segundos: ".$segundos;
}elseif($segundos>"50"){
    echo "Últimos 10 segundos"."<br>";
    echo "Segundos: ".$segundos; 
}else{
    echo "Segundos intermedios"."<br>";
    echo "Segundos: ".$segundos; 
}


echo "<br>"."<br>"."Ejercicio ejemplo switch"."<br>"."<br>";

$colores = "Naranja"; 

switch ($colores) {
    case 'Rojo':
        echo "La sangre es de color: ".$colores."<br>";
        break;
    case 'Verde':
        echo "El césped es de color: ".$colores."<br>";
        break;
    case 'Amarillo':
        echo "El sol es de color: ".$colores."<br>";
        break;    
    case 'Azul':
        echo "El cielo es de color: ".$colores."<br>";
        break;
    default:
        echo "El color: ".$colores." no está registrado"."<br>";
        break;
}

?>

</body>
</html>