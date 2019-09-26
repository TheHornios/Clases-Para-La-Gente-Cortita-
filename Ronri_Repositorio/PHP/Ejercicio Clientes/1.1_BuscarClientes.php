<?php
    include("Mostrar.php");
    //Busqueda Desordenada Secuencial
    function localizarUsuDniDesordenado($banco,$dni){
        echo "<h3> 9º Muestra los datos de un cliente por dn: </h3>";
        echo "<h4> A. Desordenada la columna</h4>";
        echo "DNI por el que se va a buscar: ".$dni.".<br/>";
        $pos = -1;
        for($i = 0;$i<count($banco);$i++){
            if($banco[$i][0]==$dni){
                $pos = $i;
            }
        }
        if($pos==-1){
            echo "No se ha encontrado cliente con el DNI: ".$dni."<br/>";
        }else{
            echo "Se ha encontrado cliente con el DNI: ".$dni." Nombre: ".$banco[$pos][1]." Fecha Nsc: ".$banco[$pos][2]." Localidad: ".$banco[$pos][3]." Saldo: ".$banco[$pos][4]."<br/>";
        }
    }
    localizarUsuDniDesordenado($banco,555555);
    

?>