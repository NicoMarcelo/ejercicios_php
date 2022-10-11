<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $n1 = $_GET['nota1'];
        $n2 = $_GET['nota2'];
        $n3 = $_GET['nota3'];
        $n4 = $_GET['nota4'];

        $pon1 = $_GET['ponderacion1'];
        $pon2 = $_GET['ponderacion2'];
        $pon3 = $_GET['ponderacion3'];
        $pon4 = $_GET['ponderacion4'];

        $nota_final = $n1*($pon1/100) + $n2*($pon2/100) + $n3*($pon3/100) + $n4*($pon4/100);
        $pon_final = $pon1 + $pon2 + $pon3 + $pon4;
        
        if($pon1 <= 0 or $pon1 >= 100){
            echo "Introduzca un valor correcto en ponderacion 1";

        }else if($pon2 <= 0 or $pon2 >= 100){
            echo "Introduzca un valor correcto en ponderacion 2"; 
        
        }else if($pon3 <= 0 or $pon3 >= 100){
            echo "Introduzca un valor correcto en ponderación 3";

        }else if($pon4 <= 0 or $pon4 >= 100){
            echo "Introduzca un valor correcto en ponderación 4";
        }

        else if($n1 < 0 or $n1 > 7.0){
            echo "El valor de la nota 1 es incorrecto";

        }else if ($n2 < 0 AND $n2 > 7.0){
            echo "El valor de la nota 2 es incorrecto";

        }else if ($n3 < 0 AND $n3 > 7.0){
            echo "El valor de la nota 3 es incorrecto";

        }else if ($n4 < 0 AND $n4 > 7.0){
            echo "El valor de la nota 4 es incorrecto";


        }else if ($pon_final < 100 or $pon_final > 100){
            echo "Introduzca el 100% de las ponderaciones";

        }else if($nota_final < 4.0){
            echo "Reprobaste culiao lo siento".$nota_final;

        }else if($nota_final > 4.0){
            echo "Aprobaste culiao bien hecho, tu nota es:".$nota_final;
        }

    }

?>