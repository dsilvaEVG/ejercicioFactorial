<html>
	<head>
		<style>
			table, th, tr, td {
				border-collapse: collapse; 
				border: solid;
				text-align: center;
			}
			table {margin: 0 auto;}
		</style>
	</head>
	<body>
		<table>
		<th colspan="3">TABLA DE FACTORIALES DEL 0 AL 10</th>
		<tr>
			<td>NÚMERO</td><td>FACTORIAL</td>
		</tr>
<?php
	require "funcion.php"; //Llamamos a la funcion
	$factoriales = array();  //Creamos el array con el nombre factoriales

	for ($i = 0; $i <= 10; $i++){
		$factoriales[$i] = 	factorial($i); //Recorremos las posiciones del array colocando el factorial que corresponde
	}

	for($i = 0; $i <= 10; $i++){
		echo "<tr><td>".$i. "</td><td>" .$factoriales[$i]. "</td></tr>"; //Imprimimos en la tabla los datos
	}
?>

<tr><td colspan="3">David Silva Vega</td></tr>
		</table>
	</body>
</html>
