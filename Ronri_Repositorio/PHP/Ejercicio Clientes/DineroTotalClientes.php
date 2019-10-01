<?php
    /* Rodrigo pascual Arnaiz */
    //Incluimos el Archvo Mostrar que tiene la funcion para mostrar la tabla y asi podemos adceder a los datos
    include("Mostrar.php");
    mostrarArrayBidimensional($banco);

    /* Recorre un array y suam en una varible el dienero de los clientes y despues el resultado de la suma lo retorna */
    function dineroTotalClientes($banco){
        echo "<h3>3º Dinero total todos los clientes </h3>";
        
        $dineroTotal = 0;
        for($i = 0;$i<count($banco);$i++){
                $dineroTotal += $banco[$i][4];	
        }
        return $dineroTotal;
    }
    
    echo "Dinero Total: ".dineroTotalClientes($banco);
?>