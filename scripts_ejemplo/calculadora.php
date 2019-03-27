
<?php	
	
	//Calculadora basica
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];
	$opera = $_POST['operacion'];
	
	echo "Numero 1: ". $n1;
	echo "<br>Numero 2: ". $n2;
	echo "<br>Operacion: ". $opera."<br><br>";
		
	switch ($opera) {
    case "suma":
        echo "Suma= ".($n1+$n2);
        break;
    case "resta":
        echo "Resta= ".($n1-$n2);
        break;
    case "multiplicacion":
        echo "Multiplicacion= ".($n1*$n2);
        break;
	case "division":
        echo "Division= ".($n1/$n2);
        break;
    case "potencia":
        echo "Potencia Nro 1= ".pow($n1,2);
		echo "<br>Potencia Nro 2= ".pow($n2,2);
        break;
    case "raiz":
        echo "Raiz cuadrada Nro 1= ".sqrt($n1);
		echo "<br>Raiz cuadrada Nro 2= ".sqrt($n2);
        break;
	case "todos":
        echo "Suma= ".($n1+$n2);
        echo "<br>Resta= ".($n1-$n2);
        echo "<br>Multiplicacion= ".($n1*$n2);
        echo "<br>Division= ".($n1/$n2);
        echo "<br>Potencia Nro 1= ".pow($n1,2);
		echo "<br>Potencia Nro 2= ".pow($n2,2);
        echo "<br>Raiz cuadrada Nro 1= ".sqrt($n1);
		echo "<br>Raiz cuadrada Nro 2= ".sqrt($n2);
        break;
	}

?>