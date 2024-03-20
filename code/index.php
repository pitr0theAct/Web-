<?php


// 1
echo "<br>".'#1'."<br>";
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order =& $very_bad_unclear_name;
$order .= " with sauce";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";
echo "<br>";

// 2
echo "<br>".'#2'."<br>";
$intVariable = 1000;
echo $intVariable. "<br>";


$floatVariable = 3.25;
echo $floatVariable. "<br>";


echo (20 - 8). "<br>";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo $lastMonth - $thisMonth. "<br>";

// 11
echo "<br>".'#11'."<br>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "<br>";



// 12
echo "<br>".'#12'."<br>";
echo 8 ** 2 . "<br>";

// 13
echo "<br>".'#13'."<br>";
$my_num = 14;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "<br>";


// 14
echo "<br>".'#14'."<br>";
$a = 10;
$b = 3;
echo $a % $b . "<br>";

if (0 == $a % $b) {
    echo "Делится на $b: " . ($a / $b) . "<br>";
} else {
    echo "Делится с остатком: " . ($a % $b) . "<br>";
}

$st = 2**10;
echo "2 в 10 степени: $st<br>";

$sqrt = sqrt(245);
echo "Квадратный корень из 245: $sqrt<br>";

$numbers = [4, 2, 5, 19, 13, 0, 10];
$sumSquares = 0;
foreach ($numbers as $number)
    $sumSquares += $number ** 2;
echo "Корень из суммы квадратов: " . sqrt($sumSquares) . "<br>";

echo round(sqrt(379)) . "<br>";
echo round(sqrt(379), 1) . "<br>";
echo round(sqrt(379), 2) . "<br>";

echo "Корень из 587: " . ceil(sqrt(587)) . ", " . floor(sqrt(587)) . "<br>";

$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "Минимальное число: " . min($numbers) . "<br>";
echo "Максимальное число: " . max($numbers) . "<br>";

echo "Случайное число от 1 до 100: " . rand(1, 100) . "<br>";

$randomNumbers = [];
for ($i = 0; 10 > $i; $i++) {
    $randomNumbers[] = rand();
}
var_dump($randomNumbers);

echo "<br>";

$a = 10;
$b = 7;
$c = 34;
$d = -66;
echo "Модуль разности $a и $b: " . abs($a - $b) . "<br>";
echo "Модуль разности $c и $d: " . abs($c - $d) . "<br>";

$numbers = [1, 2, -1, -2, 3, -3];
for ($i = 0; count($numbers) > $i; $i++) {
    $numbers[$i] = abs($numbers[$i]);
}
var_dump($numbers);

echo "<br>";

$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
    if (0 == $number % $i) {
        $divisors[] = $i;
    }
}
var_dump($divisors);

echo "<br>";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($numbers as $num) {
    $sum += $num;
    $count++;
    if (10 < $sum) {
        break;
    }
}
echo "Количество элементов для суммы больше 10: $count<br>";

// 15
echo "<br>".'#15'."<br>";
function printStringReturnNumber($str)
{
    echo $str. "<br>";
    return intval($str);
}

$my_num = printStringReturnNumber("5");
echo $my_num . "<br>";

// 16
echo "<br>".'#16'."<br>";
function increaseEnthusiasm($str)
{
    return $str . "!";
}

function repeatThreeTimes($str)
{
    return $str . $str . $str;
}

$string = "Hello";
echo increaseEnthusiasm($string) . "<br>";
echo repeatThreeTimes($string) . "<br>";

echo increaseEnthusiasm(repeatThreeTimes($string)) . "<br>";

function cut($str, $length = 10)
{
    return substr($str, 0, $length);
}

echo cut("This is a long string", 5) . "<br>";

function printArrayElementsRecursively($array, $index = 0)
{
    if ($index < count($array)) {
        echo $array[$index] . "<br>";
        printArrayElementsRecursively($array, $index + 1);
    }
}

$array = [1, 2, 3, 4, 5];
printArrayElementsRecursively($array);

echo "<br>";
function sumDigits($number)
{
    $sum = array_sum(str_split($number));
    if (9 < $sum) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}

echo sumDigits(803) . "<br>";

// 17
echo "<br>".'#17'."<br>";
$array = [];
for ($i = 1; 5 >= $i; $i++) {
    $array[] = str_repeat('x', $i);
}
var_dump($array);

echo "<br>";
function arrayFill($value, $count)
{
    return array_fill(0, $count, $value);
}

$resultArray = arrayFill('x', 5);
var_dump($resultArray);

echo "<br>";

$arr2D = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$sum = 0;
foreach ($arr2D as $i) {
    foreach ($i as $j) {
        $sum += $j;
    }
}


echo $sum. "<br>";

$counter = 1;
$multiDimArray = [];
for ($i = 0; 3 > $i; $i++) {
    $row = [];
    for ($j = 0; $j < 3; $j++) {
        $row[] = $counter++;
    }
    $multiDimArray[] = $row;
}
print_r($multiDimArray);
echo "<br>";

$userArray = [2, 5, 3, 9];
$result = ($userArray[0] * $userArray[1]) + ($userArray[2] * $userArray[3]);
echo $result . "<br>";


$user = ['name' => 'Andrew', 'surname' => 'Petrushkin', 'patronymic' => 'Vyacheslavovich'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "<br>";


$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "<br>";


$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr) . "<br>";


echo end($arr) . "<br>";
prev($arr);
echo current($arr) . "<br>";

// 18
echo "<br>".'#18'."<br>";
function checkSum($num1, $num2)
{
    return (10 < $num1 + $num2);
}

echo checkSum(5, 6) ? 'true' : 'false';
echo "<br>";


function checkEquality($num1, $num2)
{
    return ($num1 == $num2);
}

echo checkEquality(5, 5) ? 'true' : 'false';
echo "<br>";


$test = 0;
echo (0 == $test ) ? 'верно' : '';

echo "<br>";

$age = 54;
if (10 > $age || 99 < $age) {
    echo "Число вне диапазона.";
} else {
    $sum = array_sum(str_split($age));
    if (9 >=$sum)
    {
        echo "Сумма цифр однозначна.";
    } else {
        echo "Сумма цифр двузначна.";
    }
}

echo "<br>";

$arr = [1, 2, 3];
if (3 == count($arr)) {
    echo array_sum($arr);
}

echo "<br>";

// 19
echo "<br>".'#19'."<br>";
for ($i = 1; 20 >= $i; $i++) {
    echo str_repeat('x', $i) . "<br>";
}


// 20
echo "<br>".'#20'."<br>";
$array = [1, 2, 3, 4, 5];
$average = array_sum($array) / count($array);
echo "Среднее арифметическое: $average<br>";


$sum = (1 + 100) * 100 / 2;
echo "Сумма чисел от 1 до 100: $sum<br>";


$array = [9, 25, 144];
$squareRoots = array_map('sqrt', $array);
print_r($squareRoots);
echo "<br>";


$letters = range('a', 'z');
$numbers = range(1, 26);
$alphabetArray = array_combine($letters, $numbers);
print_r($alphabetArray);
echo "<br>";


$string = '1234567890';
$numbers = str_split($string, 2);
$sum = array_sum($numbers);
echo $sum . "<br>";
