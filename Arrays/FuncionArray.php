<?php
#FUNCIONES

#Unir
function uneV($vuelo1, $vuelo2){
    $var = array_merge($vuelo1,$vuelo2);
    echo "<b>"."Datos del vuelo: "."</b>";
    print_r($var);
    echo "<br>";
}

#Diferencia
function difV($vuelo1,$vuelo2){
    $var = array_diff($vuelo1,$vuelo2);
    echo "<b>"."Datos del vuelo: "."</b>";
    print_r($var);
    echo "<br>";
}

#Ordena
function ordV($vuelo1,$vuelo2){
    $var=array_merge($vuelo1,$vuelo2);
    ksort($var);
    echo "<b>"."Datos del vuelo: "."</b>";
    print_r($var);
}

#Informacion comun
function infoV($vuelo1,$vuelo2){
    $var = array_intersect($vuelo1,$vuelo2);
    echo "<b>"."Datos del vuelo: "."</b>";
    print_r($var);
}
?>