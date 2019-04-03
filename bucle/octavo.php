
<?php

	$imp=0;
	$par=0;

	for ($i = 1; $i <= 10; $i++) {
		
		$paso=rand();
		echo $paso."<br>";
		
		if($paso%2==0){
			$par++;
		}else{
			$imp++;
		}
	}
	
	echo "<center><br>Numero de pares: ".$par;
	echo "<br>Numero de impares: ".$imp,"</center>";
	
?>