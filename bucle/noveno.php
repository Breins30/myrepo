
<?php

	$imp=0;
	$par=0;
	$mimp=0;
	$mpar=0;
	
	for ($i = 1; $i <= 10; $i++) {
		
		$paso=rand(-1000000,1000000);
		echo $paso."<br>";
		if($paso>=0){
			if($paso%2==0){
				$par++;
			}else{
				$imp++;
			}
		}else{
			if($paso%2==0){
				$mpar++;
			}else{
				$mimp++;
			}
		}
	}
	
	echo "<center><br>Numero de pares positivos: ".$par;
	echo "<br>Numero de impares positivos: ".$imp,"</center>";
	echo "<center><br>Numero de pares negativos: ".$mpar;
	echo "<br>Numero de impares negativos: ".$mimp,"</center>";

?>