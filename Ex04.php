<?php
	$arr = array(1,4,2,6,9,100,45,8,20);
	$max = $arr[0];
	
	for ($i = 1; $i < count($arr); $i++) {
		if ($max < $arr[$i]) {
			$max = $arr[$i];
		}
	}
	
	echo "Max: ".$max;
?>