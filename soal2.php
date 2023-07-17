<?php
	$x = 5;

	$temp = "";
	for ($i=1; $i <= $x ; $i++) {
		for ($j=$x-$i; $j >= 1 ; $j--) { 
			echo "&nbsp;";
		}
		for ($k=1; $k <= (2*$i -1) ; $k++) { 
			echo "*";
		}
		echo "<br>";
	}
?>