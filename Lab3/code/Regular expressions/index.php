<?php
//Task 1.Paragraph a.
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/';
$found = [];

$count = preg_match_all($regexp,$str,$found);
echo "Найдено ссылок: $count\n";
var_dump($found);

//Task 1.Paragraph b.
$str = 'a1b2c3';
$regexp = '/[0-9]+/';
$replacedStr = preg_replace_callback( $regexp, function ($matches) { return pow($matches[0], 3); }, $str);
echo "\n$replacedStr\n";