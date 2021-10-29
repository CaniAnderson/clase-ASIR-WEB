<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

#Cuenta caracteres
#strlen(1) 

#Cuenta palabras
#str_word_count(2)

#Búsquedaq
#strpos(1,2) 

#Invierte texto
#strrev(1)

#Reemplaza palabra
#str_replace(3,2,1)

#1 texto 1, 2 texto 2, 3 texto 3

function cuentaletras($input){
    strlen($input)
}

function cuentapalabras($input){
    str_word_count($input)
}

function invierte($input){
    strrev($input)
}

function reemplazar($palabra, $modificar, $input){
    str_replace($palabra,$modificar,$input)
}

function buscar($input, $busca){
    strpos($input,$busca) 
}

$var1=$_POST["texto1"];
$var2=$_POST["texto2"];
$var3=$_POST["texto3"];
$selector=$_POST["operador"];

switch ($selector) {
    case 'cuentac':
       cuentaletras($var1)
    break;
    case 'cuentap':
        cuentapalabras($var2)
    break;
    case 'invierte':
        invierte($var3)
    break;
    case 'busca':
        buscar($var1,$var2)
    break;
    case 'reemplaza':
        reemplazar($var3,$var2,$var1)
    break;
    default:
        
    break;
}




?>

</body>
</html>