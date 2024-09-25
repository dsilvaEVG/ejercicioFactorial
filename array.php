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
	require "factorial.php"; // Llamamos a la función
	$factoriales = array(); // Creamos el array

	for ($i = 0; $i <= 10; $i++){
		$factoriales[$i] = 	factorial($i); // Introducimos los factoriales dentro del array
	}

	for($i = 0; $i <= 10; $i++){
		echo "<tr><td>$i</td><td> $factoriales[$i] </td></tr>"; // Volcamos el array en la tabla
	}
?>

<tr><td colspan="3">David Silva Vega</td></tr>
		</table>
	</body>
</html>