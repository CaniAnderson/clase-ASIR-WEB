<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>
<body>
<?php

include 'FuncionCadena.php';

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


$var1=$_POST["texto1"];
$var2=$_POST["texto2"];
$var3=$_POST["texto3"];
$selector=$_POST["texto"];

switch ($selector) {
    case 'cuentac':
       cuentaletras($var1);
    break;
    case 'cuentap':
        cuentapalabras($var1);
    break;
    case 'invierte':
        invierte($var1);
    break;
    case 'busca':
        buscar($var1,$var2);
    break;
    case 'reemplaza':
        reemplazar($var3,$var2,$var1);
    break;
    default:
        
    break;
}


?>

<p><a href="https://www.youtube.com/watch?v=XgpH-8W-Eyc" target="_blank">Volver al formulario</a></p>

</body>
</html>