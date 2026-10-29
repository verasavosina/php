<?php
declare(strict_types=1);
	/*
	ЗАДАНИЕ 1
	- Создайте две целочисленные переменные $cols и $rows
	- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
	*/
	$cols = 10;
	$rows = 10;
	?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table { border: 2px solid black; border-collapse: collapse; }
		th, td { padding: 10px; border: 1px solid black; }
		th { background-color: yellow; text-align: center; font-weight: bold; }
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	/*
	ЗАДАНИЕ 2 и 3
	*/
	echo "<table>";
	for ($r = 1; $r <= $rows; $r++) {
		echo "<tr>";
		for ($c = 1; $c <= $cols; $c++) {
			// Если первая строка или первый столбец — выводим th
			if ($r == 1 || $c == 1) {
				echo "<th>" . ($r * $c) . "</th>";
			} else {
				echo "<td>" . ($r * $c) . "</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	?> 
</body>
</html>