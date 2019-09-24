<?php

    $lista = [];
    $valor = 1;
    while(count($lista)!=200){
        if($valor%2 == 0){
            $lista[] = $valor;
        }
        $valor++;
    }

    
    for($i = 0;$i<count($lista);$i++){
        echo $lista[$i]."<br/>";
    }
?>