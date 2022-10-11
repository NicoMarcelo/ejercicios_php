<?php
    if( isset($_POST["submit"]) && !empty($_POST["submit"])){

        $numero = $_POST["numero"];


        if(!preg_match("/^[0-9]$/", $_POST["numero"])){
            echo ("Ingrese un número");
            exit;
        }

        $form = $numero%2;

        if($form != 0){
            echo ("Ingrese un número par");
            exit;
        }


        while($i = $numero, ){
            $numero - 2;
            echo ("".$numero);
            
        }

        



    }