<?php
    include("Datos.php");
    //Visualizar
    function mostrarArrayBidimensional($banco){
        /* Metodo mostrar */
        echo "<h3>1º Mostrar la tabla</h3>";
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

    mostrarArrayBidimensional($banco);
?>