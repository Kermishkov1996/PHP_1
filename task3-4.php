<?php 

function sum($a, $b) {
	return $a + $b;
}

function razn($a, $b) {
	return $a - $b;
}

function proizv($a, $b) {
	return $a * $b;
}

function delenie($a, $b) {
	return $a / $b;
}

function mathOperation($a, $b, $operation) {
	switch ($operation) {
		case '+':
			echo "Сумма - " . sum($a, $b);
			break;
		case '-':
			echo "Разность - " . razn($a, $b);
			break;
		case '*':
			echo "Умножение - " . proizv($a, $b);
			break;
		case '/':
			echo "Деление - " . delenie($a, $b);
			break;
	}
}

mathOperation(4, 2, '+');
echo '<br>';
mathOperation(4, 2, '-');
echo '<br>';
mathOperation(4, 2, '*');
echo '<br>';
mathOperation(4, 2, '/');

?>