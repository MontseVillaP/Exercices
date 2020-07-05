<?php
		$cantidad=$_POST['cantidad'];
		$valor1=$_POST['valor1'];
		$valor2=$_POST['valor2'];
		
echo '<body style="background-color:#91CBD6">';
		switch ($valor1) {
			case 'a':
			switch ($valor2) {
				case 'd': 
				$total = $cantidad*1;
				break;
				case 'e': 
				$total =$cantidad*0.043; 
				break;
				case 'f': 
				$total =$cantidad*0.039; 
				break;
				default: 
				echo "Syntax error";
				break;
			}
			break;
			case 'b':
			switch ($valor2) {
				case 'd': 
				$total =$cantidad*23;
				break;
				case 'e': 
				$total = $cantidad*1; 
				break;
				case 'f': 
				$total = $cantidad*0.89; 
				break;
				default: 
				echo "Syntax error";
				break;
			}
			break;
			case 'c':
			switch ($valor2) {
				case 'd': 
				$total = $cantidad*25.92;
				break;
				case 'e': 
				$total = $cantidad*1.12; 
				break;
				case 'f': 
				$total = $cantidad*1; 
				break;
				default: 
				echo "Syntax error";
				break;
			}
			break;
	
		default:
			echo "Syntax error";
			break;
		}
	echo "<center>"."<h2>"."El valor final es: <br> $".$total."</h2>"."</center>"
?>