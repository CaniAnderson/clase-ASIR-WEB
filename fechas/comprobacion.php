<?php

if ( ! empty($_POST)) {
    if (isset($_POST["nombre"]) && isset($_POST["apellido"])) 
    {
        echo "Por favor, introduzca información. Nombre y apellidos";
        
    } else {
        echo "Nombre: ".$_POST["nombre"]."<br>";
        echo "Apellidos: ".$_POST["apellido"]."<br>";
    }
} else {
    echo "Por favor, introduzca información. Formulario vacío";
}


/*

$fichero = fopen("datosForm.txt","a+");
        if ($fichero == false) {
        echo "Error, no se ha creado";
        } else {
            fwrite($fichero,$_POST["nombre"]);
            fwrite($fichero,$_POST["apellido"]);
            fwrite($fichero,$_POST["edad"]);
            fflush($fichero);
        }
        fclose($fichero);


*/

?>