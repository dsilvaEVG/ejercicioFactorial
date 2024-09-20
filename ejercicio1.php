<html>
	<head>
	</head>
	<body>
		<table>
		<th>TABLA DE FACTORIALES DEL 1 AL 10</th>
		<tr>
			<td>NÚMERO</td><td>FACTORIAL</td>
		</tr>
			<?php
			$num = 1;
			$factorial = 1;
			for ($num; $num <=10; $num++){
				for ($i = 1; $i <= $num; $i++){
					$factorial = $factorial * $i;
				}
				echo "<tr><td>$num</td><td>$factorial</td></tr>";
				$factorial = 1;
			}
			?>
		<tr><td>David Silva Vega</td></tr>
		</table>

	</body>
</html>