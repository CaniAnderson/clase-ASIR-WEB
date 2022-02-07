<?php

//Comprobacion de si existe el fichero

if (file_exists("pruebafichero.txt") == true) {
    echo "El fichero existe";
} else {
    echo "El fichero no existe";
}

echo "<br>";
echo "<br>";

//Crear un fichero

$fichero = fopen("miguelito.txt","a");
if ($fichero == false) {
    echo "Error, no se ha creado";
} else {
    echo "Se ha creado correctamente";
}

fclose($fichero);

$miguel=fopen("miguelito.txt","w+");
if ($miguel == false) {
    echo "Error, no se ha creado";
} else {
    //Escribimos el fichero
    fwrite($miguel,"Miguel Romero Pérez\r\n");
    fwrite($miguel,"Manuel Martinez Barranco");
    fflush($miguel);
}
fclose($miguel);

//Leer el fichero

echo "<br>";
echo readfile("miguelito.txt");
echo "<br>";
$peso_archivo = filesize("miguelito.txt");

echo "<br>";
echo "<br>";

$miguel=fopen("miguelito.txt","a+");
echo fread($miguel, $peso_archivo);
fclose($miguel);







?>