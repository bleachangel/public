<?php
$str = iconv("UTF-8", "GBK", "PHP编程词典@NET编程词典@ASP编程词典@JSP编程词典");
$str_arr = explode("@", $str);
print_r($str_arr);