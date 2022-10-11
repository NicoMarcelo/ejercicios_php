<?php
    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $rut = $_GET["RUT"];
        $correo = $_GET["correo"];

        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];
        $nota4 = $_GET["nota4"];

        $nota_final = round(($nota1 + $nota2 + $nota3 + $nota4)/4);

        if($nota_final >= 4.0){
            echo "Has aprobado, felicitaciones."."<br>";
            echo "Tus datos son: ".$nombre." ";
            echo "".$apellido."<br>";
            echo "".$rut."<br>";
            echo "".$correo."<br>";
            echo ("Tu nota es: ".$nota_final);
        }else{
            echo "Has reprobado, necesitas estudiar más"."<br>";
            echo "Tus datos son: ".$nombre." ";
            echo "".$apellido."<br>";
            echo "".$rut."<br>";
            echo "".$correo."<br>";
            echo ("Tu nota es: ".$nota_final);
        }

    }