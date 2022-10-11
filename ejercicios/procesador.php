<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $n1 = $_GET['nota1'];
        $n2 = $_GET['nota2'];
        $n3 = $_GET['nota3'];
        $n4 = $_GET['nota4'];
        $n5 = $_GET['nota5'];
        $n6 = $_GET['nota6'];
        $n7 = $_GET['nota7'];
        $n8 = $_GET['nota8'];

        if($n1<0 or $n1 >70){
            echo "El valor de la nota 1 es incorrecto";

        }else if ($n2<0 or $n2 >70){
            echo "El valor de la nota 2 es incorrecto";

        }else if ($n3<0 or $n3 >70){
            echo "El valor de la nota 3 es incorrecto";

        }else if ($n4<0 or $n4 >70){
            echo "El valor de la nota 4 es incorrecto";

        }else if ($n5<0 or $n5 >70){
            echo "El valor de la nota 5 es incorrecto";
            
        }else if ($n6<0 or $n6 >70){
            echo "El valor de la nota 6 es incorrecto";

        }else if ($n7<0 or $n7 >70){
            echo "El valor de la nota 7 es incorrecto";

        }else if ($n8<0 or $n8 >70){
            echo "El valor de la nota 8 es incorrecto";

        }
        $prom =($n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8)/8;
        
        if($prom < 40 ){
            echo "Has reprobado, tu nota es:".$prom;

        }else if($prom >= 40){
            echo "Has aprobado, tu nota es:".$prom;
        }
        
    }

?>