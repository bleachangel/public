<?php
$month = date("n");
$today = date("j");
if($today >= 1 and $today <= 10){
    echo "今天是".$month."月".$today."日上旬";
}elseif($today > 10 and $today <= 20){
    echo "今天是".$month."月".$today."日中旬";
}else{
    echo "今天是".$month."月".$today."日下旬";
}
?>
