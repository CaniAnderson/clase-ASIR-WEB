<?php
function cuentaletras($input){
    $res=strlen($input);
    echo "Hay ".$res." caracteres";
}

function cuentapalabras($input){
    $res=str_word_count($input);
    echo "Hay ".$res." palabras";
}

function invierte($input){
    $res=strrev($input);
    echo "El texto invertido es: ".$res;
}

function reemplazar($palabra, $modificar, $input){
    $res=str_replace($palabra,$modificar,$input);
    echo $res;
}

function buscar($input, $busca){
    $res=strpos($input,$busca);
    if ($res==True) {
        echo "La palabra se encuentra en el texto";
    } else {
        echo "La palabra no se encuentra en el texto";
    } 
}
?>