<?php
    include("Mostrar.php");
    //Dinero Total
    function dineroTotalClientes($banco){
        echo "<h3>3º Dinero total todos los clientes </h3>";
        $dineroTotal = 0;
        for($i = 0;$i<count($banco);$i++){
                $dineroTotal += $banco[$i][4];	
        }
        echo "Dinero Total: ".$dineroTotal;
    }
    dineroTotalClientes($banco);
?>