<?php
/*
    echo "Do while <br/>";
    $a = 1;
    do{
        if( $a%2 == 0){
            echo $a."<br/>";
        }
        $a ++;
    }while($a<=100);
    echo "while <br/>";

    $c = 1;
    while($c<=100){
        if( $c%2 == 0){
            echo $c."<br/>";
        }
        $c ++;
    }

    echo "For <br/>";
    for($i = 1;$i<=100;$i++){
        if( $i%2 == 0){
            echo $i."<br/>";
        }
    }
*/
    
    $i = 2;
    $cantidad = 0;
    $time = time();
    while(time()-$time<20){
        $n = 2;
        $seguir = true;

        while($seguir&&$i/2>$n){
            if($i%$n==0){
                $seguir = false;
            }
            $n++;
        }
        if( $seguir){
            $cantidad ++;
        }

        $i++;
    }
    $time1 = time();
    echo $cantidad."-Cantidad-<br/>";
?>