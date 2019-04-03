<form name="frm1" action="serie.php" method="POST">
	<table align="center">
		<tr>
			<td>
				Digite un numero
			</td>
		</tr>
		<tr>
			<td>
				<input type="number" name="num" required>
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="submit" value="Calcular">
			</td>
		</tr>
	</table>
</form>
			

<?php

	$n=$_POST['num'];
	$variable=$n;

	echo"<table align='right' border='1'>";
	
	for($i=1;$i<=$n;$i++){
		echo "<tr><td>".$i."</td>";
		echo "<td>".$variable."</td></tr>";
		$variable--;
	}
	
	echo"</table>";
	
	echo"<table align='left' border='1'><tr>";
	
	for($i=1;$i<=$n;$i++){
		echo "<td>".$i."</td>";
	}
	
	echo"</tr>";
	
	echo"<tr>";
	
	for($i=$n;$i>0;$i--){
		echo "<td>".$i."</td>";
	}
	
	echo"</tr></table>";
	
?>