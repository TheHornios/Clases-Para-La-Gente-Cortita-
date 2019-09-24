<?php

	/*Numeros No Repetidos*/
	/*
	echo "Numeros No Repetidos:<br/>";
	$var1  = 10;
	$var2 = 10;
	$var3 = 10;
	$var4 = 10;
	$var5 = 10;
	$var6 = 10;
	
	$bucle = true;
	
	while($bucle){
		if(($var1!=$var2&&$var1!=$var3&&$var1!=$var4&&$var1!=$var5&&$var1!=$var6)&&($var1!=$var2&&$var2!=$var3&&$var2!=$var4&&$var2!=$var5&&$var2!=$var6)&&($var1!=$var3&&$var2!=$var3&&$var3!=$var4&&$var3!=$var5&&$var3!=$var6)&&($var1!=$var4&&$var2!=$var4&&$var3!=$var4&&$var4!=$var5&&$var4!=$var6)&&($var1!=$var5&&$var2!=$var5&&$var3!=$var5&&$var4!=$var5&&$var5!=$var6)&&($var1!=$var6&&$var2!=$var6&&$var3!=$var6&&$var4!=$var6&&$var5!=$var6)){
			$bucle = false;
		}else{
			$var1  = rand(1,49);
			$var2 = rand(1,49);
			$var3 = rand(1,49);
			$var4 = rand(1,49);
			$var5 = rand(1,49);
			$var6 = rand(1,49);
		}
	}
	echo $var1."<br/>";
	echo $var2."<br/>";
	echo $var3."<br/>";
	echo $var4."<br/>";
	echo $var5."<br/>";
	echo $var6."<br/>";
	*/

	
	echo "Numeros No Repetidos:<br/>";
	$var1 = rand(1,6);
	$var2 = rand(1,6);
	$var3 = rand(1,6);
	$var4 = rand(1,6);
	$var5 = rand(1,6);
	$var6 = rand(1,6);

	for($i =1;$i<7;$i++){
		$valor = "var".$i;
		$bulce  = true;
		while($bulce){
			$bulce  = false;
			for($x =1;$x<7;$x++){
				$valor1 = "var".$x;
				if($x != $i&&$$valor == $$valor1){
					$$valor = rand(1,6);
					$bulce = true;
				}
			}
		}
		echo $$valor."<br/>";
	}
	
	echo "Numeros No Repetidos:<br/>";
	$arr = [];
	for($i = 0;$i<10;$i++){
		$arr[$i] = rand(1,49);
	}
	for($i = 0;$i<count($arr);$i++){
		$bulce  = true;
		while($bulce){
			$bulce  = false;
			for($x =0;$x<count($arr);$x++){
				if($x != $i&&$arr[$i] == $arr[$x]){
					$arr[$i] = rand(1,49);
					$bulce = true;
				}
			}
		}
		echo $arr[$i]."<br/>";
	}
?>
