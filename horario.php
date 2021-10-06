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
    echo "".$t."<br>";
    echo "Asignatura: ".$t;
}elseif($t == "9"){
    echo "Últimos 10 t =="."<br>";
    echo "Son las: ".$t; 
}elseif($t == "10"){
    echo "Últimos 10 t =="."<br>";
    echo "Son las: ".$t; 
}elseif($t == "11"){
    echo "Últimos 10 t =="."<br>";
    echo "Son las: ".$t; 
}elseif($t == "12"){
    echo "Últimos 10 t =="."<br>";
    echo "Son las: ".$t; 
}elseif($t == "13"){
    echo "Últimos 10 t =="."<br>";
    echo "Son las: ".$t; 
}elseif($t == "14"){
    echo "Últimos 10 t =="."<br>";
    echo "Son las: ".$t; 
}else{
    echo "Últimos 10 t =="."<br>";
    echo "Son las: ".$t; 

}
echo "<br>"."<br>";

$dia = date("l"); 

switch ($dia) {
    case 'Monday':
        echo"
        <table>
        <tr>
        <td>LUNES</td>
        </tr> 
        <tr>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>SERV RED</td>
        </tr>
        </table>
    ";
        break;
    case 'Tuesday':    
    echo" 
        <table> 
        <tr>
        <td>MARTES</td>
        </tr> 
        <tr>
        <td>ASO</td>
        </tr>
        <tr>
        <td>ASO</td>
        </tr>
        <tr>
        <td>ASO</td>
        </tr>
        <tr>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>EMPRESA</td>
        </tr>
        <tr>
        <td>EMPRESA</td>
        </tr>
    ";
        break;
    case 'Wednesday':;
    echo"
        <table> 
        <tr>
        <td>MIÉRCOLES</td>
        </tr> 
        <tr>
        <td>ASO</td>
        </tr>
        <tr>
        <td>ASO</td>
        </tr>
        <tr>
        <td>ASO</td>
        </tr>
        <tr>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>SERV RED</td>
        </tr>
        <tr>
        <td>SERV RED</td>
        </tr>
        </table>
    ";
    break;    
    case 'Thursday':;
    echo"
        <table> 
        <tr>
        <td>JUEVES</td>
        </tr> 
        <tr>
        <td>BD</td>
        </tr>
        <tr>
        <td>BD</td>
        </tr>
        <tr>
        <td>BD</td>
        </tr>
        <tr>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>INGLÉS</td>
        </tr>
        <tr>
        <td>INGLÉS</td>
        </tr>
        </table>
    ";
    break;
    case 'Friday':;
    echo"
        <table> 
        <tr>
        <td>VIERNES</td>
        </tr> 
        <tr>
        <td>INGLÉS</td>
        </tr>
        <tr>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>SEGURIDAD</td>
        </tr>
        <tr>
        <td>RECREO</td>
        </tr>
        <tr>
        <td>APP WEB</td>
        </tr>
        <tr>
        <td>EMPRESA</td>
        </tr>
        <tr>
        <td>EMPRESA</td>
        </tr>
        </table>
    ";
    break;
    default:
        echo "Estamos en fin de semana"."<br>";
        break;
}

?>

<br><br><a href="Web ASIR.html">Volver a la página principal</a>
</body>
</html>