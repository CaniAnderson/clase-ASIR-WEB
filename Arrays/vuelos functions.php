<?php

include 'FuncionArray.php';

if(isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])){

    $selector=$_POST["herramienta"];

    $vuelo1=$_POST["infovuelo1"];
        $var1=$vuelo1["codigo1"];
        $var2=$vuelo1["ciudadorigen1"];
        $var3=$vuelo1["ciudaddestino1"];
        $var4=$vuelo1["precio1"];
        $var5=$vuelo1["fecha1"];


    $vuelo2=$_POST["infovuelo2"];
        $var6=$vuelo2["codigo2"];
        $var7=$vuelo2["ciudadorigen2"];
        $var8=$vuelo2["ciudaddestino2"];
        $var9=$vuelo2["precio2"];
        $var10=$vuelo2["fecha2"];




    #LLammar funciones
    switch ($selector) {
        case 'une':
            uneV($vuelo1,$vuelo2);
            break;
        
        case 'difr':
            difV($vuelo1,$vuelo2);
            break;
        
        case 'orde':
            ordV($vuelo1,$vuelo2);
            break;
        
        case 'info':
            infoV($vuelo1,$vuelo2);
            break;
                    
        default:
            
            break;
    }

}

?>
