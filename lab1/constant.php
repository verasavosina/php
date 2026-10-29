<?php
define('MY_CONSTANT', 'Значение константы');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	if (defined('MY_CONSTANT')) {
		echo 'Константа MY_CONSTANT существует: ' . MY_CONSTANT . '<br>';
	}
	echo 'Версия PHP: ' . PHP_VERSION . '<br>';
	echo 'Директория скрипта: ' . __DIR__ . '<br>';
	?>
</body>
</html>