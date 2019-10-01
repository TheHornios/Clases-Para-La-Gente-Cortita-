<?php
	/* Rodrigo Pascual Arnaiz*/
	
    include("Mostrar.php");
    mostrarArrayBidimensional($banco);

    //Mostrar el maximo dinero, se basa en recorrer una vez un array y guardo la posicion con el mayor salario
    //Despues compruebo en otro bucle si ahy sueldos repetidos y en el caso de que esistan los guardo en un array
    //Despues devuelvo el array
    function clienteMasDinero($banco){
        echo "<h3>2º Cliente con mas dinero</h3>";
        $posX = -1;
        $sueldoMax = $banco[1][4];;
        
        for($i = 0;$i<count($banco);$i++){
            if($banco[$i][4]>=$sueldoMax){
                $posX = $i;
                $sueldoMax = $banco[$i][4];
                
            }
        }

        $array = array();
        for($i = 0;$i<count($banco);$i++){
            if($banco[$posX][4]==$banco[$i][4]){
                $array[] = $i;
            }
        }
        return $array;
    }

    $valor = clienteMasDinero($banco);
    echo "El sueldo maximo lo tiene: <br/>";
    
    for($i = 0;$i<count($valor);$i++){
        echo "<b> DNI: </b>".$banco[$valor[$i]][0]." <b>Nombre: </b>".$banco[$valor[$i]][1]." <b>Sueldo: </b>".$banco[$valor[$i]][4]."<br/>";
    }
    
?>