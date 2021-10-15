<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form>
        <fieldset>
            <legend>Calculadora</legend>
            <p><label for="fname">Número 1:</label>
            <input type="text" id="fname" name="fname"></p>
            <p><label for="lname">Número 2:</label>
            <input type="text" id="lname" name="lname"></p>
            <p>Operaciones:</p>
            <p><input type="button" name="" value="+">
            <input type="button" name="" value="-">
            <input type="button" name="" value="x">
            <input type="button" name="" value="/">
            <input type="button" name="" value="%"></p>
            <p><input type="button" name="" value="Resolver"></p>
        </fieldset>
        <h3>Resultado: </h3>
        <p><a href="Web ASIR.html">Volver a la página principal</a></p>
    </form>
    
<?php

function suma($num1,$num2){

    $res= $num1 + $num2;

    echo "El resultado es: ".$res."<br>";

}

suma (3,2);
suma (3,3);

?>

</body>
</html>