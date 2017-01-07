<?php
$a = "编程体验网\纪要";
echo $a;
echo "<br>";
$b = addcslashes($a, "编程体验网");
echo $b."<br>";
$c = stripcslashes($b);
echo $c;
?>
