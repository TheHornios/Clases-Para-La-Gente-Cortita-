<?php
    include("Mostrar.php");
    //Clientes que son chicas que acaban con a o emiezan con MA

    function mostrarMuejres($banco){
        echo "<h3>5º Clientes que son chicas que acaban con A o emiezan con MA </h3>";
        echo "Mujeres en la lista de clientes: <br/>";
        for($i = 0;$i<count($banco);$i++){
            if(strtoupper(substr($banco[$i][1],strpos($banco[$i][1],', ')+2,2))=="MA"||strtoupper(substr($banco[$i][1],strlen($banco[$i][1])-1))=="A"){
                echo "<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]."<br/>";
            }
        }
    }
    mostrarMuejres($banco);    
?>