<?php
//Creamos la funcion que calcula el factorial de un número
	function factorial($num){
		if ($num ==0 ) {return 1;} //Si el factorial es 0, directamente el resultado es 1
		else {
			$resultado = 1;
			for($i =1; $i <= $num; $i++){ //Bucle que va multiplicando
				$resultado=$resultado*$i;
			}
			return $resultado;
		}
	}
?>
