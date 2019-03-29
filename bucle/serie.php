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

	echo"<table align='right'><tr>";
	
	for($i=1;$i<=$n;$i++){
		echo "<td>".$i."</td>";
	}
	
	for($i=$n;$i==1;$i--){
		echo "<td>".$i."</td>";
	}
	
	echo"</table></tr>";
	
?>