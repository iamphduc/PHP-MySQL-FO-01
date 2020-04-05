<?php
	$a = 0;
	$b = 0;
	$c = 3;
	$x = 0;
	$x1 = 0;
	$x2 = 0;
	 
	if ($a == 0) {
		if ($b == 0) {
			if ($c == 0) {
				echo "Phuong trinh vo so nghiem";
			} else {
				$x = -$c;
			}
		} else {
			$x = -$c/$b;
		}
		echo "Phuong trinh co 1 nghiem<br>x = ".$x;
	} else {
		$delta = $b*$b - 4*$a*$c;
		
		if ($delta < 0) {
			echo "Phuong trinh vo nghiem";
		} else if ($delta == 0) {
			$x = -$b/(2*$a);
			echo "Phuong trinh co nghiem kep<br>x1 = x2 = ".$x;
		} else {
			$x1 = (-$b + sqrt($delta)) / (2*$a);
			$x2 = (-$b - sqrt($delta)) / (2*$a);
			echo "Phuong trinh co 2 nghiem phan biet<br>x1 = ".$x1."<br>x2 = ".$x2;
		}		
	}
?>