<html>
	<head>
	</head>
	<body>
		<table>
		<?php
		$min = 4;
		$max = 18;
		?>
		<th><?php echo "TABLA DE FACTORIALES DEL $min AL $max"?></th>
		<tr>
			<td>NÚMERO</td><td>FACTORIAL</td>
		</tr>
			<?php
			$factorial = 1;
			for ($min; $min <= $max; $min++){
				for ($i = 1; $i <= $min; $i++){
					$factorial = $factorial * $i;
				}
				echo "<tr><td>$min</td><td>$factorial</td></tr>";
				$factorial = 1;
			}
			?>
		<tr><td>David Silva Vega</td></tr>
		</table>

	</body>
</html>