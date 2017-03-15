<?php 
$x = rand(0, 100);
echo $x;

$x1 = 1;
$x2 = 1;

while ($x1 >= $x2) {
	if ($x1 > $x) {
		echo ' задуманное число НЕ входит в числовой ряд';
		exit();
	}
	else {
		if ($x1 == $x) {
			echo ' задуманное число входит в числовой ряд';
		exit();
		}
		else {
			$x3 = $x1;
			$x1 = $x1 + $x2;
			$x2 = $x3;
			echo '<br/>';
			echo $x1;
			echo '<br/>';
			echo $x2;
			echo '<br/>';
			echo $x3;
		}
	}
}