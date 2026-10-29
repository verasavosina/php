<?php
declare(strict_types=1);

// Задание с анонимной функцией $swap
$swap = function (&$a, &$b) {
	$temp = $a;
	$a = $b;
	$b = $temp;
};

$a = 5;
$b = 8;
$swap($a, $b);
echo "После swap: a = $a, b = $b<br>"; // a = 8, b = 5

// Задание с функцией map
/**
 * Применяет коллбэк к каждому элементу массива.
 * 
 * @param array $arr Исходный массив
 * @param callable $callback Функция обратного вызова
 * @return array Измененный массив
 */
function map(array $arr, callable $callback): array
{
	$result = [];
	foreach ($arr as $item) {
		$result[] = $callback($item);
	}
	return $result;
}

$numbers = [1, 2, 3, 4, 5];
$squared = map($numbers, fn($n) => $n ** 2);
echo "Квадраты чисел: " . implode(', ', $squared) . "<br>"; // 1, 4, 9, 16, 25
?>