<?php
$str = "select * from tb_book where bookname = 'PHP5从入门到精通'";
echo $str."<br>";
$a = addslashes($str);
echo $a."<br>";
$b=stripslashes($a);
echo $b."<br>";
?>
