<?php 

$a = 6;
$b = -3;
if ($a >= 0 && $b >= 0)
	echo "Разность = " . ($a - $b);
elseif ($a < 0 && $b < 0)
	echo "Произведение = " . ($a * $b);
elseif (($a >= 0 && $b <= 0) || ($a <= 0 && $b >= 0))
	echo "Сумма = " . ($a + $b);

?>