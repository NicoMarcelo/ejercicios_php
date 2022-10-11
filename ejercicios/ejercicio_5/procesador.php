<?php
    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $rut = $_GET["rut"];
        $correo = $_GET["correo"];


        if($nombre == "" or ){
            echo "Complete el campo de nombre.";
    
        }else if($apellido == ""){
            echo "Complete el campo de apellido.";

        }else if($rut == ""){
            echo "Complete el campo de RUT.";

        }else if($correo == ""){
            echo "Complete el campo de correo.";
        }

        else{
            echo ("Hola"." ".$nombre." ".$apellido.", "."¿como estas?"."<br>");
            echo("Tu rut es: ".$rut."<br>");
            echo("Tu correo es: ".$correo);

        }

    }
    

    