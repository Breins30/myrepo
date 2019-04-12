

<?php
	
	echo"<table align='center' border='1'>";
	
	for ($i = 1; $i <= 10; $i++) {
		
		echo"<tr>";
		
		for ($j = 1; $j <= 10; $j++) {
			
			$paso=$i*$j;
			
			if($paso==100){
				echo"<td align='center'><img src='100.png' width='20'></td>";
			}else if($paso%3!=0 && $paso!=100){
				if($paso%2==0 && $paso!=100){
					echo"<td align='center' bgcolor='yellow'>".$paso."</td>";
				}
				else if($paso%2!=0 && $paso!=100){
					echo"<td align='center' bgcolor='green'>".$paso."</td>";
				}
			}else if($paso%3==0 && $paso!=100){
				echo"<td align='center'><font color='blue'>".$paso."</font></td>";
			}else{
				echo"<td align='center'>".$paso."</td>";
			}
		}
	}

	echo"</table>";
	
?>