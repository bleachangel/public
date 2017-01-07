<?php
function example1($m){
	$m = $m*5 + 10;
	echo "在函数内：\$m = ".$m;
}

$m = 1;
echo example1($m);
echo "<p>example1(\$m),在函数外：\$m = $m <p>";

function example2(&$n){
	$n = $n*5 + 10;
	echo "在函数内：\$n = ".$n;
}

$n = 1;
echo example2($n);
echo "<p>example2(\$n),在函数外：\$n = $n <p>";

function values($price, $tax=""){
	$price = $price + ($price * $tax);
	echo "价格：$price <br>";
}

values(100, 0.25);
values(100);
?>
