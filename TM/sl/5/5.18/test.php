<?php
$str=iconv("UTF-8", "GB2312","用今日的辛勤工作，换明日的双倍回报！");
$replace=iconv("UTF-8", "GB2312","百倍");
echo substr_replace($str, $replace, 26, 4);

//setlocale(LC_ALL, "en_US.UTF-8");
//echo setlocale(LC_ALL, 0);

// Set language to German
//putenv('LC_ALL=de_DE');
//setlocale(LC_ALL, 'de_DE');

// Specify location of translation tables
//bindtextdomain("myPHPApp", "./locale");

// Choose domain
//textdomain("myPHPApp");

// Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now

// Print a test message
echo gettext("Welcome to My PHP Application");

// Or use the alias _() for gettext()
echo _("用今日的辛勤工作，换明日的双倍回报！");

