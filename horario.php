<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            width: auto;
        }
    </style>
    <title>Horario ASIR</title>
</head>
<body>
    <h1>Horario ASIR 2021/2022</h1>
    <br>
<?php
echo "Día: ".date("l")."<br>";
echo "Fecha: ".date("d/n/Y")."<br>";
echo "Hora: ".date("H:i:s")."<br>"."<br>";

echo "<table>";
        echo "<caption>Horario</caption>";
        echo "<tr>";
            echo "<td>HORA</td>";
            echo "<td>LUNES</td>";
            echo "<td>MARTES</td>";
            echo "<td>MIÉRCOLES</td>";
            echo "<td>JUEVES</td>";
            echo "<td>VIERNES</td>";
            echo "<td>SÁBADO</td>";
            echo "<td>DOMINGO</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>8:00</td>";
            echo "<td>APP WEB</td>";
            echo "<td>ASO</td>";
            echo "<td>ASO</td>";
            echo "<td>BD</td>";
            echo "<td>INGLÉS</td>";
            echo "<td></td>";
            echo "<td></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>9:00</td>";
            echo "<td>APP WEB</td>";
            echo "<td>ASO</td>";
            echo "<td>ASO</td>";
            echo "<td>BD</td>";
            echo "<td>SEGURIDAD</td>";
            echo "<td></td>";
            echo "<td></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>10:00</td>";
            echo "<td>APP WEB</td>";
            echo "<td>ASO</td>";
            echo "<td>ASO</td>";
            echo "<td>BD</td>";
            echo "<td>SEGURIDAD</td>";
            echo "<td></td>";
            echo "<td></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>11:00</td>";
            echo "<td>RECREO</td>";
            echo "<td>RECREO</td>";
            echo "<td>RECREO</td>";
            echo "<td>RECREO</td>";
            echo "<td>RECREO</td>";
            echo "<td></td>";
            echo "<td></td>";
    echo "</tr>";
        echo "<tr>";
            echo "<td>12:00</td>";
            echo "<td>SERV RED</td>";
            echo "<td>SEGURIDAD</td>";
            echo "<td>SERV RED</td>";
            echo "<td>SEGURIDAD</td>";
            echo "<td>APP WEB</td>";
            echo "<td></td>";
            echo "<td></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>13:00</td>";
            echo "<td>SERV RED</td>";
            echo "<td>EMPRESA</td>";
            echo "<td>SERV RED</td>";
            echo "<td>INGLÉS</td>";
            echo "<td>EMPRESA</td>";
            echo "<td></td>";
            echo "<td></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>14:00</td>";
            echo "<td>SERV RED</td>";
            echo "<td>EMPRESA</td>";
            echo "<td>SERV RED</td>";
            echo "<td>INGLÉS</td>";
            echo "<td>EMPRESA</td>";
            echo "<td></td>";
            echo "<td></td>";
        echo "</tr>";
    echo "</table>"."<br>"."<br>";

$t = date("H");
if ($t == "8") {
    echo "Son las: ".$t;
}elseif($t == "9"){
    echo "Son las: ".$t; 
}elseif($t == "10"){
    echo "Son las: ".$t; 
}elseif($t == "11"){
    echo "Son las: ".$t; 
}elseif($t == "12"){
    echo "Son las: ".$t; 
}elseif($t == "13"){
    echo "Son las: ".$t; 
}elseif($t == "14"){
    echo "Son las: ".$t; 
}else{
    echo "Son las: ".$t; 

}
echo "<br>"."<br>";

$dia = date("l"); 

switch ($dia) {
    case 'Monday':
        echo"
        <table>
        <tr>
        <td>HORA</td>
        <td>LUNES</td>
        </tr> 
        <tr>
        <td>8:00</td>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>9:00</td>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>10:00</td>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>11:00</td>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>12:00</td>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>13:00</td>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>14:00</td>
        <td>SERV RED</td>
        </tr>
        </table>";
        echo "<br>"."<br>";

    $t = date("H");
    if ($t == "8") {
        echo "Estamos en: APP WEB";
    }elseif($t == "9"){
        echo "Estamos en: APP WEB"; 
    }elseif($t == "10"){
        echo "Estamos en: APP WEB"; 
    }elseif($t == "11"){
        echo "Estamos en: RECREO"; 
    }elseif($t == "12"){
        echo "Estamos en: SERV RED"; 
    }elseif($t == "13"){
        echo "Estamos en: SERV RED"; 
    }elseif($t == "14"){
        echo "Estamos en: SERV RED"; 
    }else{
        echo "Estamos en: CASA"; 
    
    }   ;
        break;
    case 'Tuesday':    
    echo" 
        <table> 
        <tr>
        <td>HORA</td>
        <td>MARTES</td>
        </tr> 
        <tr>
        <td>8:00</td>
        <td>ASO</td>
        </tr>
        <tr>
        <td>9:00</td>
        <td>ASO</td>
        </tr>
        <tr>
        <td>10:00</td>
        <td>ASO</td>
        </tr>
        <tr>
        <td>11:00</td>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>12:00</td>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>13:00</td>
        <td>EMPRESA</td>
        </tr>
        <tr>
        <td>14:00</td>
        <td>EMPRESA</td>
        </tr>
        <table>";
        echo "<br>"."<br>";
        $t = date("H");
        if ($t == "8") {
            echo "Estamos en: ASO";
        }elseif($t == "9"){
            echo "Estamos en: ASO"; 
        }elseif($t == "10"){
            echo "Estamos en: ASO"; 
        }elseif($t == "11"){
            echo "Estamos en: RECREO"; 
        }elseif($t == "12"){
            echo "Estamos en: SEGURIDAD"; 
        }elseif($t == "13"){
            echo "Estamos en: EMPRESA"; 
        }elseif($t == "14"){
            echo "Estamos en: EMPRESA"; 
        }else{
            echo "Estamos en: CASA"; 
        
        }   ;
        break;
    case 'Wednesday':;
    echo"
        <table> 
        <tr>
        <td>HORA</td>
        <td>MIÉRCOLES</td>
        </tr> 
        <tr>
        <td>8:00</td>
        <td>ASO</td>
        </tr>
        <tr>
        <td>9:00</td>
        <td>ASO</td>
        </tr>
        <tr>
        <td>10:00</td>
        <td>ASO</td>
        </tr>
        <tr>
        <td>11:00</td>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>12:00</td>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>13:00</td>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>14:00</td>
        <td>SERV RED</td>
        </tr>
        </table>";
        echo "<br>"."<br>";
        $t = date("H");
        if ($t == "8") {
            echo "Estamos en: ASO";
        }elseif($t == "9"){
            echo "Estamos en: ASO"; 
        }elseif($t == "10"){
            echo "Estamos en: ASO"; 
        }elseif($t == "11"){
            echo "Estamos en: RECREO"; 
        }elseif($t == "12"){
            echo "Estamos en: SERV RED"; 
        }elseif($t == "13"){
            echo "Estamos en: SERV RED"; 
        }elseif($t == "14"){
            echo "Estamos en: SERV RED"; 
        }else{
            echo "Estamos en: CASA"; 
        
        }   ;
    break;    
    case 'Thursday':;
    echo"
        <table> 
        <tr>
        <td>HORA</td>
        <td>JUEVES</td>
        </tr> 
        <tr>
        <td>8:00</td>
        <td>BD</td>
        </tr>
        <tr>
        <td>9:00</td>
        <td>BD</td>
        </tr>
        <tr>
        <td>10:00</td>
        <td>BD</td>
        </tr>
        <tr>
        <td>11:00</td>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>12:00</td>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>13:00</td>
        <td>INGLÉS</td>
        </tr>
        <tr>
        <td>14:00</td>
        <td>INGLÉS</td>
        </tr>
        </table>";
        echo "<br>"."<br>";
        $t = date("H");
        if ($t == "8") {
            echo "Estamos en: BD";
        }elseif($t == "9"){
            echo "Estamos en: BD"; 
        }elseif($t == "10"){
            echo "Estamos en: BD"; 
        }elseif($t == "11"){
            echo "Estamos en: RECREO"; 
        }elseif($t == "12"){
            echo "Estamos en: SEGURIDAD"; 
        }elseif($t == "13"){
            echo "Estamos en: INGLÉS"; 
        }elseif($t == "14"){
            echo "Estamos en: INGLÉS"; 
        }else{
            echo "Estamos en: CASA"; 
        
        }   ;
    break;
    case 'Friday':;
    echo"
        <table> 
        <tr>
        <td>HORA</td>
        <td>VIERNES</td>
        </tr> 
        <tr>
        <td>8:00</td>
        <td>INGLÉS</td>
        </tr>
        <tr>
        <td>9:00</td>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>10:00</td>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>11:00</td>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>12:00</td>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>13:00</td>
        <td>EMPRESA</td>
        </tr>
        <tr>
        <td>14:00</td>
        <td>EMPRESA</td>
        </tr>
        </table>";
        echo "<br>"."<br>";
        $t = date("H");
        if ($t == "8") {
            echo "Estamos en: INGLÉS";
        }elseif($t == "9"){
            echo "Estamos en: SEGURIDAD"; 
        }elseif($t == "10"){
            echo "Estamos en: SEGURIDAD"; 
        }elseif($t == "11"){
            echo "Estamos en: RECREO"; 
        }elseif($t == "12"){
            echo "Estamos en: APP WEB"; 
        }elseif($t == "13"){
            echo "Estamos en: EMPRESA"; 
        }elseif($t == "14"){
            echo "Estamos en: EMPRESA"; 
        }else{
            echo "Estamos en: CASA"; 
        
        }   ;
    break;
    default:
        echo "Estamos en fin de semana"."<br>";
        break;
}

?>

<br><br><a href="Web ASIR.html">Volver a la página principal</a>
</body>
</html>