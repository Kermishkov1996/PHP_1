<?php 

function power($value, $pow) {
	if ($pow != 0) {
		$result = $value * power($value, $pow - 1);
		return $result;
	}
		return 1;
}
echo power(2,4);

?>