<?php
    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){
        
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $rut = $_GET["rut"];
        $correo = $_GET["correo"];

        $carrera = $_GET["carrera"];

        if($nombre == "" or is_numeric($nombre)){
            echo ("Introduzca un nombre válido");
        }else if($apellido == "" or is_numeric($apellido)){
            echo ("Introduzca un apellido válido");
        }else if($rut == ""){
            echo ("Introduzca un rut válido");
        }else if($correo == ""){
            echo ("Introduzca un correo válido");
        }

        if($carrera == "informatica"){
            echo ("Has escogido la mejor carrera");
        }else{
            echo ("Muy bien, vas por buen camino");
        }

    }