<?php
	$n = 5;
	$S = 0;
	
	for ($i = 1; $i <= $n; $i++) {
		$factorial = 1;
		for ($j = 1; $j <= $i; $j++) {
			$factorial *= $j;
		}
		$S += $i/$factorial;
	}
	
	echo "S = ".$S;
?>