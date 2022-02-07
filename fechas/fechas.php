<?php

echo date("Y")."<br>";
echo date("d M Y")."<br>";
echo date("d/m/Y")."<br>";
echo date("d/m/y h:i:s")."<br>";

echo "<br>";

//Zonas UTC

echo "Estoy en la zona de: " .date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S");

echo "<br>";

date_default_timezone_set("America/Jamaica");
echo "Estoy en la zona de: " .date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<br>";

echo "<br>";

//07/02/2022 9:00:00

$fechita=mktime("09","00","00","02","07","2022");
echo $fechita."<br>";
echo date("d/m/y h:i:s",$fechita)."<br>";

echo "<br>";

/*

1 minuto = 60 segundos
1 hora = 60*60 = 3600 segundos
1día = 24*3600 = 86400 segundos

*/

//Suma 1 día y 2 horas

$fechita = $fechita + 86400+7200;
echo date("d/m/y h:i:s",$fechita)."<br>";

echo "<br>";

//Diferencia entre 2 fechas

$fecha1=mktime(9,0,0,2,7,2022);
$fecha2=mktime(12,0,0,2,9,2022);

$diff= $fecha2 - $fecha1;

$minutos = $diff/60;
$horas = $diff/3600;
$dias = $diff/84600;


echo "Fecha origen ".date("d/m/y h:i:s",$fecha1)."<br>";
echo "Fecha destino ".date("d/m/y h:i:s",$fecha2)."<br>";

echo "Faltan ".$minutos." minutos"."<br>";
echo "Faltan ".$horas." horas"."<br>";
echo "Faltan ".$dias." días"."<br>";


?>