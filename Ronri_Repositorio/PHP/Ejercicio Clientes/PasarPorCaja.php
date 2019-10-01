<?php
    //Fecha de Defuncion Esperanza de vida Sexo('M' o 'H')
    //El metodo le suma 80 o 85 a el año de nacimeinto, despues retorna el resultado, todo lo hacemos con el tiempo unix
    function pasarPorCaja($fecha_nac,$sexo){
        $anosQueTeQuedan ;
        if($sexo == 'M'){
            $anosQueTeQuedan = 85*365.25*24*60*60;
        }else{
            $anosQueTeQuedan = 80*365.25*24*60*60;
        }
        list($d,$m,$y) = explode("/",$fecha_nac);
        $fechaUnix = mktime(0,0,0,$m,$d,$y);

        $fechaMuerte = $fechaUnix+$anosQueTeQuedan;
        return date("d/m/Y",$fechaMuerte);
    }

    echo "Paso a comprar un ataud el: ".pasarPorCaja("02/12/2000",'H');
?>