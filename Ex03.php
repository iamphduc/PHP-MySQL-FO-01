<?php
	for ($i = 1; $i <= 10; $i++) {
		for ($j = 2; $j < 10; $j++) {
			echo $j." x ".$i." = ".($i*$j);
			if (($i*$j) <10) {
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			} else if ($i <10) {
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			} else {
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
		}
		echo "<br>";
	}
?>