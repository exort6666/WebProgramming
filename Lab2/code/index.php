<?php
// Task 1. Доступ по ссылке.
echo "Task 1.";
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= 'anyString';

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "\n\nTask 2.\n";

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

echo "\n\nTask 11.\n";

//Task 11. Умножение и деление

$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo $daysPerLanguage;

echo "\n\nTask 12.\n";

//Task 12. Степень
echo 8**2;

echo "\n\nTask 13.\n";

//Task 13. Операторы присваивания
$myNum = 13;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer;

echo "\n\nTask 14.\n";

//Task 14. Математические функции.
echo "Работа с %.\n";
//Работа с %
$a = 10;
$b = 3;
$remainder = $a%$b;

echo $remainder;

if (0 == $remainder){
    echo "\nДелится. Результат деления - ";
    echo (int) $a/$b;
} else{
    echo "\nДелится с остатком. Остаток - $remainder";
}

//Работа со степенью и корнем.
echo "\nРабота со степенью и корнем.\n";
$st = pow(2,10);
echo "$st\n";
echo sqrt(245);
$array = [4, 2, 5, 19, 13, 0 , 10];
$sumOfSquares = 0;
foreach ($array as $i){
    $sumOfSquares += $i*$i;
}
echo "\nСумма квадратов $sumOfSquares\n,а её корень ";
echo sqrt($sumOfSquares);

//Работа с функциями округления.
echo "\nРабота с функциями округления\n";
echo round(sqrt(379),0) . "\n";
echo round(sqrt(379),1) . "\n";
echo round(sqrt(379),2);
echo "\nОкругление в большую сторону ";
echo floor(sqrt(587));
echo "\nОкругление в меньшую сторону ";
echo ceil(sqrt(587));

//Работа с min max
echo "\nРабота с min и max\nМинимальное: ";
echo min(4, -2, 5, 19, -130, 0, 10);
echo "\nМаксимальное: ";
echo max(4, -2, 5, 19, -130, 0, 10);

//Работа с Рандомом
echo "\nРабота с рандомом\n";
echo "Случайно число от 1 до 100: " . rand(1, 100) . "\n";
$array = [];
for ($i = 0; $i <10; $i++) {
    $array[] = rand(1, 100);
}
echo "Наш массив \n";
var_dump($array);
//Работа с модулем
echo "\nРабота с модулем\n";
$a = 10;
$b = 12;
echo abs($a-$b) . "\n";
$array = [1, 2, -1, -2, 3, -3];
foreach (range(0, count($array) - 1) as $i){
    if ($array[$i] < 0) {
        $array[$i] = abs($array[$i]);
    }
}
echo "Массив после замены отрицательных чисел на положительные:\n";
var_dump($array);

//Общее
echo "\nОбщее\n";
$number = 30;
$array = [];
for ($i = 1;$i**2 <= $number;$i++){
    if (0 == $number%$i){
        $array[] = $i;
        if ($i*$i!=$number){
            $array[] = $number / $i;
        }
    }
}
asort($array);
echo "Делители числа $number находятся в массиве \n";
var_dump($array);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$i = 0;
while ($sum <=10){
    $sum+=$array[$i];
    $i++;
}
echo "\nНужно сложить $i элементов\n";





