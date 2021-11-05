<?php

$numero1 = 8;
$numero2 = 3;
$numero3 = 7;
$numero4 = 1;

$numeros = array(8, 3, 7, 1);

$suspensos = array("Miguel","Kerry");

$coches = array("Ferrari","Seat","BMW","Opel","Mercedes");



echo $suspensos[0]."<br>";
echo $numeros[3]."<br>";
echo $coches[1]."<br>"."<br>";



$cuentacoches = count($coches);

echo "Número de coches: ".$cuentacoches."<br>"."<br>";

$aleatorio = rand(0,$cuentacoches-1);

echo "Coche aleatorio: ".$coches[$aleatorio]."<br>"."<br>";


$parada=0;
while ($parada <= 5) {

    $aleatorio = rand(0,$cuentacoches-1);
    echo $coches[$aleatorio]."<br>";
    $parada++;
}



#ARRAY ASOCIATIVOS

$alumnos = array(
                array("Nombre" => "Migue",
                "Apellido" => "Kerry",
                "Edad" => 23,
                "EstaAprobado" => false),
                array("Nombre" => "Paco",
                "Apellido" => "Macaco",
                "Edad" => 20,
                "EstaAprobado" => false));

echo $alumnos["Nombre"].$alumnos;


?>