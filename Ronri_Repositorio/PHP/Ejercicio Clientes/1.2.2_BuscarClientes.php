<?php
    include("Datos.php");

    /* Odenar El Array */
    function ordenarPorDniAscendente($banco){
        echo "<h4> Array  odenado</h4>";
        $secu = array();
        for($i = 0;$i<count($banco);$i++){
            for($x = 0;$x<count($banco)-1;$x++){
                if($banco[$x][0]>$banco[$x+1][0]){
                    $secu = $banco[$x];
                    $banco[$x] = $banco[$x+1];
                    $banco[$x+1] = $secu;
                }
            }
        }
        return $banco;
    }

    /* Asocio el array odenado a la varible */
    $banco = ordenarPorDniAscendente($banco);
    //Mostrar Array
    echo '<table border="1">'."<tr><th>DNI</th><th>Nombre Completo</th><th>Fecha Nacimiento</th><th>Localidad</th><th>Sueldo</th></tr>";
    for($i = 0;$i<count($banco);$i++){
        echo "<tr>";
        for($x = 0;$x<count($banco[$i]);$x++){
            echo "<td>".$banco[$i][$x]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    //Busqueda Ordenada Binaria
	function localizarUsuDniOrdenadoBinaria($banco,$dni){
        echo "<h3> 9º Muestra los datos de un cliente por dn: </h3>";
		echo "<h4> C. Ordenada la columna, Bianria</h4>";
        echo "DNI por el que se va a buscar: ".$dni.".<br/>";
        $bucle = true;
        $masBajaPos = 0;
        $masAltaPos = 0;
        $pos = -1;
        if($banco[floor(count($banco)/2)][0]==$dni){
            $bucle = false;
            $pos = floor(count($banco)/2);
        }else{
            if($banco[floor(count($banco)/2)][0]>$dni){
                $masBajaPos = 0;
                $masAltaPos = floor(count($banco)/2)-1;
            }else{
                $masBajaPos = floor(count($banco)/2);
                $masAltaPos = count($banco)-1;
            }
        }
        while($bucle){
            if($banco[$masBajaPos][0]==$dni){
                $bucle = false;
                $pos = $masBajaPos;
            }else{
                if($banco[$masAltaPos][0]==$dni){
                    $bucle = false;
                    $pos = $masAltaPos;
                }else{
                    if($banco[floor(($masBajaPos+$masAltaPos)/2)][0]>$dni){
                        $masAltaPos = floor(($masBajaPos+$masAltaPos)/2)-1;
                    }else{
                        $masBajaPos = floor(($masBajaPos+$masAltaPos)/2);
                    }
                }                   //7 -- 4
            }
        }
        if($pos ==0){
            echo "No se ha encontrado cliente con el DNI: ".$dni."<br/>";
        }else{
            echo "Se ha encontrado cliente con el DNI: ".$dni." Nombre: ".$banco[$pos][1]." Fecha Nsc: ".$banco[$pos][2]." Localidad: ".$banco[$pos][3]." Saldo: ".$banco[$pos][4]."<br/>";
        }
    }
    localizarUsuDniOrdenadoBinaria($banco,888888);
?>