
<html>

	<head></head>

	<body>
	
		<h1><b><center>Tabla de multiplicar</center></b></h1>
		
		<form name="frm1" action="decimo.php" method="POST">
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
	
	</body>

</html>

<?php

	$n=$_POST['num'];
	
	echo"<table border='1' align='center'>";
	
	for($i=1 ; $i<=10; $i++){
			echo"<tr><td>".$i." * ".$n."</td>";
			echo"<td>".($i*$n)."</td></tr>";
	}
	
	echo"</table>"
	
?>