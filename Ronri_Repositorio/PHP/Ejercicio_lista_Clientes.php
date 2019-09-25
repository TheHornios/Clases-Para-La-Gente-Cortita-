<html>	
	<head>
		<title>Esto es una prueba de arrays</title>
	</head>
	<body>
		<?php
			/*Crea mediante codigo un array de dos dimensiones que en cada fila contiene los datos de un cliente
			  de un banco en el siguente orden: 
			  0º DNI
			  1º Apellido1 apellido2,nombre 
			  2º Fecha de naciemiento
			  3º Localidad
			  4º Saldo

			  1 Mostrar la tabla
			  2 Cliente con mas dinero
			  3 Dinero total todos los clientes 
			  4 Quien es mas viejo y joven 
			  5 Clientes que son chicas que acaban con a o emiezan con MA
			  6 Ordena y muestra por dni
			  7 Odenas por localidad y mostrar 
			  8 Totalizar saldos por  cada una de las localidades 
			  9 Muestra los datos de un cliente por dn: 
					  A Desordenada la columna
					  B Ordenada la columna  
					  //Busqueda binaria dicotomica
					  //secuencial
			  10 Buscar una determinada localidad asiganda a un varible 
			*/
			static $banco = array(
				array(999999,"Pascual Arnaiz, Rodrigo","24/09/2000","Burgos",10),
				array(222222,"Hernadez Alvarez, Alvaro","24/02/1999","Bilbao",9374),
				array(555555,"Alvarez Tamayo, Diega","24/02/1989","Madrid",435),
				array(444444,"Tamayo Iñigez, Maria","23/12/2003","Leon",234),
				array(777777,"Iñigez Martinez, Marimar","24/05/1997","Burgos",45745),
				array(666666,"Martinez Ronrigez, Luis","24/02/1989","Madrid",2423),
				array(111111,"Ronrigez Cantabrana, Ruben","24/01/2002","Burgos",534534),
				array(888888,"Cantabrana Temiño, Eduardo","24/12/2003","Valencia",634),
				array(999999,"Temiño Aliendre, Pablo","24/04/1999","Leon",2),
				array(111000,"Aliendre Arnaiz, Hector","24/07/2000","Bilbao",534534),
			);
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
			///////////////////////////////////////////////////////////
			function clienteMasDinero($banco){
				echo "<h3>2º Cliente con mas dinero</h3>";
				$posX = -1;
				$sueldoMax = 0;
				$arrayVariosMismoSueldo =[];
				for($i = 0;$i<count($banco);$i++){
					if($banco[$i][4]>$sueldoMax){
						$posX = $i;
						$sueldoMax = $banco[$i][4];
					}
				}
				echo "El sueldo maximo lo tiene: <br/>";
				for($i = 0;$i<count($banco);$i++){
					if($banco[$posX][4]==$banco[$i][4]){
						echo "<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Sueldo: </b>".$banco[$i][4]."<br/>";
					}
				}
			}
			///////////////////////////////////////////////////////////
			function dineroTotalClientes($banco){
				echo "<h3>3º Dinero total todos los clientes </h3>";
				$dineroTotal = 0;
				for($i = 0;$i<count($banco);$i++){
						$dineroTotal += $banco[$i][4];	
				}
				echo "Dinero Total: ".$dineroTotal;
			}
			//////////////////////////////////////////////////////////
			function masJovenYviejo($banco){
				echo "<h3>4º Quien es mas viejo y joven </h3>";
				$arrayFechaJoven = [];
				$arrayFechaJoven[0]=0;
				$arrayFechaJoven[1]=0;
				$arrayFechaJoven[2]=0;

				$arrayFechaMasMayor = [];
				$arrayFechaMasMayor[0]=10000;
				$arrayFechaMasMayor[1]=10000;
				$arrayFechaMasMayor[2]=10000;
				// Joven
				for($i = 0;$i<count($banco);$i++){
					if($arrayFechaJoven[0]<((int)substr($banco[$i][2],6))){
						$arrayFechaJoven[0] = ((int)substr($banco[$i][2],6));
					}
				}
				for($i = 0;$i<count($banco);$i++){
					if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))){
						if($arrayFechaJoven[1]<((int)substr($banco[$i][2],3,2))){
							$arrayFechaJoven[1] = ((int)substr($banco[$i][2],3,2));
						}
					}
				}
				for($i = 0;$i<count($banco);$i++){
					if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))&&$arrayFechaJoven[1]==((int)substr($banco[$i][2],3,2))){
						if($arrayFechaJoven[2]<((int)substr($banco[$i][2],0,2))){
							$arrayFechaJoven[2] = ((int)substr($banco[$i][2],0,2));
						}
					}
				}
				// Mayor
				for($i = 0;$i<count($banco);$i++){
					if($arrayFechaMasMayor[0]>((int)substr($banco[$i][2],6))){
						$arrayFechaMasMayor[0] = ((int)substr($banco[$i][2],6));
					}
				}
				for($i = 0;$i<count($banco);$i++){
					if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))){
						if($arrayFechaMasMayor[1]>((int)substr($banco[$i][2],3,2))){
							$arrayFechaMasMayor[1] = ((int)substr($banco[$i][2],3,2));
						}
					}
				}
				for($i = 0;$i<count($banco);$i++){
					if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))&&$arrayFechaMasMayor[1]==((int)substr($banco[$i][2],3,2))){
						if($arrayFechaMasMayor[2]>((int)substr($banco[$i][2],0,2))){
							$arrayFechaMasMayor[2] = ((int)substr($banco[$i][2],0,2));
						}
					}
				}
				// Mostrar 
				$textoJoven = " ";
				$textoMayor = " ";
				for($i = 0;$i<count($banco);$i++){
					if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))&&$arrayFechaJoven[1]==((int)substr($banco[$i][2],3,2))&&$arrayFechaJoven[2]==((int)substr($banco[$i][2],0,2))){
						$textoJoven .="<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Fecha Nac: </b>".$banco[$i][2]."<br/>";
					}
					if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))&&$arrayFechaMasMayor[1]==((int)substr($banco[$i][2],3,2))&&$arrayFechaMasMayor[2]==((int)substr($banco[$i][2],0,2))){
						$textoMayor .="<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Fecha Nac: </b>".$banco[$i][2]."<br/>";
					}
				}
				echo "El Mas Joven: <br/>".$textoJoven;
				echo "El Mas Mayor: <br/>".$textoMayor;
			}
			//////////////////////////////////////////////////////////
			function mostrarMuejres($banco){
				echo "<h3>5º Clientes que son chicas que acaban con A o emiezan con MA </h3>";
				echo "Mujeres en la lista de clientes: <br/>";
				for($i = 0;$i<count($banco);$i++){
					if(strtoupper(substr($banco[$i][1],strpos($banco[$i][1],', ')+2,2))=="MA"||strtoupper(substr($banco[$i][1],strlen($banco[$i][1])-1))=="A"){
						echo "<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]."<br/>";
					}
				}
			}
			//////////////////////////////////////////////////////////
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
			//////////////////////////////////////////////////////////
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
			//////////////////////////////////////////////////////////
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
			//////////////////////////////////////////////////////////
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
			//////////////////////////////////////////////////////////
			function saldosPorLocalidad($banco){
				echo "<h3>8º Totalizar saldos por  cada una de las localidades </h3>";
				$provinciasEsistentes = array();
				$provinciasEsistentes[] = strtoupper($banco[0][3]);
				for($i = 0;$i<count($banco);$i++){
					$anadir = true;
					for($x = 0;$x<count($provinciasEsistentes);$x++){
						if(strtoupper($banco[$i][3])==strtoupper($provinciasEsistentes[$x])){
							$anadir  = false;
						}
					}
					if($anadir){
						$provinciasEsistentes[] = strtoupper($banco[$i][3]);
					}
				}
				for($i = 0;$i<count($provinciasEsistentes);$i++){
					$dinero = 0;
					for($x = 0;$x<count($banco);$x++){
						if(strtoupper($banco[$x][3])==$provinciasEsistentes[$i]){
							$dinero += $banco[$x][4]; 
						}
					}
					echo "Dinero totalizado de: ".$provinciasEsistentes[$i]." es: ".$dinero."<br/>";
				}
			}
			


			/** Mostrar cosas  */
			mostrarArrayBidimensional($banco);
		//	clienteMasDinero($banco);
		///	dineroTotalClientes($banco);
		//	masJovenYviejo($banco);
		//  mostrarMuejres($banco);
		//	ordenarPorDniAscendente($banco);
		//	ordenarPorDniDecendente($banco);
		//	ordenarPorLocalidad1($banco);
		//	ordenarPorLocalidad2($banco);
			saldosPorLocalidad($banco);
		?>
	</body>
</html>	