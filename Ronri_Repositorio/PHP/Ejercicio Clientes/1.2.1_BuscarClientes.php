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

    //Busqueda Ordenada Secuencial
	function localizarUsuDniOrdenadoSecuencial($banco,$dni){
		echo "<h3> 9º Muestra los datos de un cliente por dn: </h3>";
		echo "<h4> B. Ordenada la columna, Secuencial</h4>";
        echo "DNI por el que se va a buscar: ".$dni.".<br/>";
        $pos = -1;
        if($banco[round(count($banco)/2)][0]>$dni){
            for($i = 0;$i<round(count($banco)/2);$i++){
                if($banco[$i][0]==$dni){
                    $pos  = $i;
                }
            }
        }else{
            for($i = round(count($banco)/2);$i<count($banco);$i++){
                if($banco[$i][0]==$dni){
                    $pos  = $i;
                }
            }
        }
        if($pos==-1){
            echo "No se ha encontrado cliente con el DNI: ".$dni."<br/>";
        }else{
            echo "Se ha encontrado cliente con el DNI: ".$dni." Nombre: ".$banco[$pos][1]." Fecha Nsc: ".$banco[$pos][2]." Localidad: ".$banco[$pos][3]." Saldo: ".$banco[$pos][4]."<br/>";
        }
    }
    localizarUsuDniOrdenadoSecuencial($banco,999999);
?>