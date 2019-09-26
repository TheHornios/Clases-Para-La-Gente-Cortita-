<?php
    include("Mostrar.php");
    //Odenas por localidad y mostrar 
    //Ascendente
    function ordenarPorLocalidad1($banco){
        echo "<h3>7.1º Odenas por localidad y mostrar</h3>";

        $secu = array();
        for($i = 0;$i<count($banco);$i++){
            for($x = 0;$x<count($banco)-1;$x++){
                if(strtoupper($banco[$x][3]{0})>strtoupper($banco[$x+1][3]{0})){
                    $secu = $banco[$x];
                    $banco[$x] = $banco[$x+1];
                    $banco[$x+1] = $secu;
                }else{
                    if(strtoupper($banco[$x][3]{0}) == strtoupper($banco[$x+1][3]{0})&&strtoupper($banco[$x][3]{1}) > strtoupper($banco[$x+1][3]{1})){
                        $secu = $banco[$x];
                        $banco[$x] = $banco[$x+1];
                        $banco[$x+1] = $secu;
                    }else{
                        if(strtoupper($banco[$x][3]{0}) == strtoupper($banco[$x+1][3]{0})&&strtoupper($banco[$x][3]{1}) == strtoupper($banco[$x+1][3]{1})&&strtoupper($banco[$x][3]{2}) > strtoupper($banco[$x+1][3]{2})){
                            $secu = $banco[$x];
                            $banco[$x] = $banco[$x+1];
                            $banco[$x+1] = $secu;
                        }
                    }
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
    //Descendente
    function ordenarPorLocalidad2($banco){
        echo "<h3>7.2º Odenas por localidad y mostrar</h3>";

        $secu = array();
        for($i = 0;$i<count($banco);$i++){
            for($x = 0;$x<count($banco)-1;$x++){
                if(strtoupper($banco[$x][3]{0})<strtoupper($banco[$x+1][3]{0})){
                    $secu = $banco[$x];
                    $banco[$x] = $banco[$x+1];
                    $banco[$x+1] = $secu;
                }else{
                    if(strtoupper($banco[$x][3]{0}) == strtoupper($banco[$x+1][3]{0})&&strtoupper($banco[$x][3]{1}) < strtoupper($banco[$x+1][3]{1})){
                        $secu = $banco[$x];
                        $banco[$x] = $banco[$x+1];
                        $banco[$x+1] = $secu;
                    }else{
                        if(strtoupper($banco[$x][3]{0}) == strtoupper($banco[$x+1][3]{0})&&strtoupper($banco[$x][3]{1}) == strtoupper($banco[$x+1][3]{1})&&strtoupper($banco[$x][3]{2}) < strtoupper($banco[$x+1][3]{2})){
                            $secu = $banco[$x];
                            $banco[$x] = $banco[$x+1];
                            $banco[$x+1] = $secu;
                        }
                    }
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
    ordenarPorLocalidad1($banco);
	ordenarPorLocalidad2($banco);
?>