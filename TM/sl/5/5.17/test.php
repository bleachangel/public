<?php
$tab = array("UTF-8", "ASCII", "GBK", "GB2312", "Windows-1252", "ISO-8859-15", "ISO-8859-1", "ISO-8859-6", "CP1256");
$chain = "";
foreach ($tab as $i)
{
    foreach ($tab as $j)
    {
        $chain = iconv($i, $j, "白领女子公寓");
        echo $chain;
    }
}

$content=iconv("UTF-8", "GB2312", "白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！");
$str=iconv("UTF-8", "GB2312", "女子公寓");
echo str_ireplace($str, "<font color='#FF0000'>".$str."</font>", $content);