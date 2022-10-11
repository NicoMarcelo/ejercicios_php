<?php

    if( isset($_POST["submit"]) && !empty($_POST["submit"])){

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $contra = $_POST["contraseña"];


        if($nombre == ""){
            echo ("Introduzca un nombre.");
        }
        if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]{3,15}$/", $_POST["nombre"])){
            echo ("Introduzca un nombre válido");

        }else if($correo == ""){
            echo("Introduzca el correo electrónico.");

        }else if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "Introduzca un email válido.";

        }else if($contra == ""){
            echo ("Introduzca una contraseña.");

        }else if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÚÓ0-9$@.-]{5,30}$/", $_POST["contraseña"])){
            echo ("Introduzca una contraseña válida");
        
        }else{
            echo ("Hola, ".$nombre.", Bienvenido.");
        }

    } 