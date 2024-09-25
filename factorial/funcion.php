<?php
// Creamos la función del factorial
	function factorial($num){
		if ($num ==0 ) {return 1;}
		else {
			$resultado = 1;
			for($i =1; $i <= $num; $i++){
				$resultado=$resultado*$i;
			}
			return $resultado;
		}
	}
?>
