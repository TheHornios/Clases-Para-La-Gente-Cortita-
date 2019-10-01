<?php
    include("Mostrar.php");
    //Ordena y muestra por dni
    mostrarArrayBidimensional($banco);
    //Ascendentemente
    function ordenarPorDniAscendente($banco){
        echo "<h3>6.1º Ordena y muestra por dni Acendente</h3>";
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
        echo '<table border="1">'."<tr><th>DNI</th><th>Nombre Completo</th><th>Fecha Nacimiento</th><th>Localidad</th><th>Sueldo</th></tr>";
        for($i = 0;$i<count($banco);$i++){
            echo "<tr>";
            for($x = 0;$x<count($banco[$i]);$x++){
                echo "<td>".$banco[$i][$x]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    //Descendentemente
    function ordenarPorDniDecendente($banco){
        echo "<h3>6.2º Ordena y muestra por dni Acendente</h3>";
        $secu = array();
        for($i = 0;$i<count($banco);$i++){
            for($x = 0;$x<count($banco)-1;$x++){
                if($banco[$x][0]<$banco[$x+1][0]){
                    $secu = $banco[$x];
                    $banco[$x] = $banco[$x+1];
                    $banco[$x+1] = $secu;
                }
            }
        }
        echo '<table border="1">'."<tr><th>DNI</th><th>Nombre Completo</th><th>Fecha Nacimiento</th><th>Localidad</th><th>Sueldo</th></tr>";
        for($i = 0;$i<count($banco);$i++){
            echo "<tr>";
            for($x = 0;$x<count($banco[$i]);$x++){
                echo "<td>".$banco[$i][$x]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ordenarPorDniAscendente($banco);
	ordenarPorDniDecendente($banco);
?>