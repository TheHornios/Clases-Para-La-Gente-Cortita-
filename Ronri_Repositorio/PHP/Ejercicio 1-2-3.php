<?php
    /*Ejercicio 1 ¿Cual es el mayor?*/
    echo "Ejercicio 1 ¿Cual es el mayor?<br/>";
    $a = 1;
    $b = 0;
    $c = 3;
    if($a == $b && $c == $b){
        echo 'Todos tienen el mismo valor';
    }else{
        if($a == $b){
            echo 'A y B tienen el mismo valor';
        }else{
            if($c == $b){
                echo 'C y B tienen el mismo valor';
            }else{
                if($c == $a){
                    echo 'A y C tienen el mismo valor';
                }else{
                    if($a>$b){
                        if($a>$c){
                            echo '$a es el mayor y su valor es: '.$a;
                        }else{
                            echo '$c es el mayor y su valor es: '.$c;
                        }
                    }else{
                        if($b>$c){
                            echo '$b es el mayor y su valor es: '.$b;
                        }else{
                            echo '$c es el mayor y su valor es: '.$c;
                        }
                    }
                }
            }
        }
    }
    /*Ejercicio 2 ordena de mayor a menor*/
    echo "<br/>Ejercicio 2 ordena de mayor a menor<br/>";
    $a = 1;
    $b = 0;
    $c = 1;

    $x = 0;
    if(!($a==$b&&$a==$c)){
        if($a>$b){
            $x=$b;
            $b=$a;
            $a=$x;
            if($b>$c){
                $x=$c;
                $c=$b;
                $b=$x;
            }
        }else{
            if($b>$c){
                $x=$c;
                $c=$b;
                $b=$x;
                if($a>$b){
                    $x=$b;
                    $b=$a;
                    $a=$x;
                }
            }
        }
    }
    echo $a."<br/>";
    echo $b."<br/>";
    echo $c."<br/>";
    /*Ejercicio 3 Triangulo*/
    echo "<br/>Ejercicio 3 Triangulo<br/>";
    $a = 3;
    $b = 2;
    $c = 1;

    $x = 0;
    if(!($a==$b&&$a==$c)){
        if($a>$b){
            $x=$b;
            $b=$a;
            $a=$x;
            if($b>$c){
                $x=$c;
                $c=$b;
                $b=$x;
            }
        }else{
            if($b>$c){
                $x=$c;
                $c=$b;
                $b=$x;
                if($a>$b){
                    $x=$b;
                    $b=$a;
                    $a=$x;
                }
            }
        }
    }
    echo $a." Lado 1 <br/>";
    echo $b." Lado 2 <br/>";
    echo $c." Lado 3 <br/>";
    if($b+$a<=$c){
        echo "Los lados no forman un triangulo"."<br/>";
    }else{
        echo "Los lados forman un triangulo"."<br/>";
    }
    
?>