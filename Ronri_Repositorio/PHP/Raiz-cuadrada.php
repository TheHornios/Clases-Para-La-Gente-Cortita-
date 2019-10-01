<html>	
	<head>
		<title>Esto es una prueba de arrays</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
	</head>
	<body>
		<?php
		
			$a=1;
			$b=-2;
			$c=1;
			echo '$a = '.$a.", ".'$b = '.$b.", ".'$c = '.$c."<br/>";

			$x1 = 0;
			$x2 = 0;
			if(sqrt($b*$b-4*$a*$c)>0 && a!=0){
				$x1 = (-$b+sqrt($b*$b-4*$a*$c))/(2*$a);
				$x2 = (-$b-sqrt($b*$b-4*$a*$c))/(2*$a);
				echo $x1."<br/>";
				echo $x2;
			}else{
				if(sqrt($b*$b-4*$a*$c)<=0){
					echo "$x1 no existe porque la raiz cuadrada de: ".sqrt($b*$b-4*$a*$c)." no existe <br/>";
					echo "$x2 no existe porque la raiz cuadrada de: ".sqrt($b*$b-4*$a*$c)." no existe <br/>";
				}else{
					echo '$a es 0 por lo que no es una ecuacion de segundo grado';
				}
			}
			
		?>
	</body>
</html>	