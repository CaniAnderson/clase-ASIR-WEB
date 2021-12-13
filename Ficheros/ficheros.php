<?php

$recogidatexto=$_GET["textarea"];

$recogidaradio=$_GET["selecciona"];


if ($recogidaradio == 1) {
    
    $ficheroa = fopen("pruebafichero.txt","a") or die ("Fallo al abrir el fichero");
    $ficheror = fopen("pruebafichero.txt","r") or die ("Fallo al abrir el fichero");
    $pesofichero = filesize("pruebafichero.txt");
    $nuevotexto=$recogidatexto;

    fwrite($ficheroa,$nuevotexto);

    fclose($ficheroa);
    
    echo fread($ficheror,$pesofichero);

    fclose($ficheror);
    
}else{

   echo "Se ha enviado el texto";

}


/*
$recogidatexto=$_GET["textarea"];

$recogidaradio=$_GET["selecciona"];


if ($recogidaradio == 1) {
    
    $fichero = fopen("pruebafichero.txt","a") or die ("Fallo al abrir el fichero");

    $nuevotexto=$recogidatexto;

    fwrite($fichero,$nuevotexto);

    fclose($fichero);

    echo readfile("pruebafichero.txt");

}else{

   echo "Se ha enviado el texto";

}
*/


?>

