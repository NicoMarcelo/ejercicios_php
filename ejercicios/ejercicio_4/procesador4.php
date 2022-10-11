<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $n1 = $_GET['nota1'];
        $n2 = $_GET['nota2'];

        $pon1 = $_GET['ponderacion1'];
        $pon2 = $_GET['ponderacion2'];

        $nota_final = $n1*($pon1/100) + $n2*($pon2/100);
        $pon_final = $pon1 + $pon2;
        

        if($n1 <= 0 or $n1 > 7.0){
            echo "El valor de la nota 1 es incorrecto";

        }else if ($n2 <= 0 AND $n2 > 7.0){
            echo "El valor de la nota 2 es incorrecto";

        }else if($pon1 <= 0 or $pon1 > 100){
            echo "Introduzca un valor correcto en ponderacion 1";

        }else if($pon2 <= 0 or $pon2 > 100){
            echo "Introduzca un valor correcto en ponderacion 2";
            
        }else if($pon_final < 100 or $pon_final > 100){
            echo "Introduzca el 100% de las ponderaciones";

        }else if($nota_final < 4.0){
            echo "Reprobaste culiao lo siento, tu nota es: ".$nota_final;

        }else if($nota_final > 4.0){
            echo "Aprobaste culiao :grin:  bien hecho, tu nota es: ".$nota_final;
        }

    }
?>