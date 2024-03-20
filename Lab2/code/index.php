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

//Task 15. Функции
echo "\nФункции\n";
function printStringReturnNumber($line) //Можно написать function printStringReturnNumber(string $line): int
{                                       // но у меня другая версия php
    echo $line;
    return intval($line);
}
$myNum = printStringReturnNumber("12");
echo $myNum;

//Task 16.
echo "\nФункции\n";
function increaseEnthusiasm($line){
    return $line . "!";
}
echo increaseEnthusiasm("Stroka") . "\n";

function repeatThreeTimes($line){
    return $line . $line . $line;
}

echo repeatThreeTimes("Stroka") . "\n";

echo increaseEnthusiasm(repeatThreeTimes("Stroka")) . "\n";

function cut($line, $count = 10){
    return substr($line, 0, $count);
}
echo cut("veryVeryBigMessage") . "\n";

function printArrayRecursion($array, $index = 0)
{
    echo $array[$index++] . " ";
    if ($index < count($array)) {
        printArrayRecursion($array, $index);
    }
}

printArrayRecursion([1, 2, 3, 4, 5, 7]);
echo "\n";

$number = 12345;
function digitsAddition($inputNumber)
{
    $sum = 0;
    foreach (str_split("$inputNumber") as $digit) {
        $sum += intval($digit);
    }
    if ($sum > 9) {
        return digitsAddition($sum);
    } else {
        return $sum;
    }
}
echo digitsAddition($number) . "\n";

//Task 17. Массивы
echo "\nМассивы\n";

$tempArray = ["x"];
for ($i = 1; $i < 10; $i++) {
    $tempArray[] = $tempArray[$i - 1] . "x";
}

function arrayFil($line, $count)
{
    $array = [$line];
    for ($i = 1; $i < $count; $i++) {
        $array[] = $array[$i - 1] . $line;
    }
    return $array;
}
var_dump(arrayFil('x',5));
echo "\n";

$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($array as $smallArray) {
    foreach ($smallArray as $i) {
        $sum += $i;
    }
}
echo $sum;
echo "\n";

$tempArray[] = [];
for ($i = 0; $i < 3; $i++) {
    $a = 1 + $i * 3;
    $b = 3 + $i * 3;
    foreach (range($a, $b) as $j) {
        $tempArray[$i][] = $j;
    }
}
var_dump($tempArray);

$tempArray = [2, 5, 3, 9];
$result = $tempArray[0] * $tempArray[1] + $tempArray[2] * $tempArray[3];
echo $result . "\n";

$user = ['name' => "Evgeniy", 'surname' => "Lagunov", 'patronymic' => "Olegovich"];
echo $user["surname"] . " " . $user['name'] . " " . $user['patronymic'] . "\n";

$date = ['year' => 2024, 'day' => 20, 'month' => 12];
echo $date["year"] . " " . $date['month'] . " " . $date['day'] . "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr) . "\n";

echo $arr[count($arr) - 1] . "/n" . $arr[count($arr) - 2] . "/n";

//Task 18. Конструкция if else
echo "\nКонструкция if else\n";
function boolSumTen($firstNum, $secondNum)
{
    return 10<=$firstNum+$secondNum;
}

function secondTrueOrFalse($firstNum, $secondNum)
{
    return $firstNum === $secondNum;
}

$test = 0;
if ($test == 0) echo "верно";

$age = rand(1,1000);
if (10 > $age or $age > 99) {
    echo "Число меньше 10 или больше 99\n";
} else {
    $sum = 0;
    foreach (str_split("$age") as $digit) {
        $sum += intval($digit);
    }
    if ($sum <= 9) {
        echo "Сумма цифр однозначна\n";
    } else {
        echo "Сумма цифр двузначна\n";
    }
}

$array = [12, 23, 12, 12];
if (count($array) == 3) echo $array[0]+$array[1]+$array[2] . "\n";






