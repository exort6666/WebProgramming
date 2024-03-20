<?php
// Task 1. Доступ по ссылке.

$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= 'anyString';

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "\n\n";

//Task 2. Числа.
$varInt = 228;
echo "int: $varInt";
echo "\n";

$varFloat = 3.22;
echo "float: $varFloat \n";

$var12 = 6*2; //Не понятен комментарий к этому пункту
echo "$var12 \n";

$lastMonth = 1187.23;
$this_month = 1089.98;
echo $lastMonth-$this_month;

echo "\n\n";

//Task 11. Умножение и деление

$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo $daysPerLanguage;

echo "\n\n";

//Task 12. Степень
echo 8**2;

echo "\n\n";









