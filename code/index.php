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

$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month. "<br>";

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

if ($a % $b == 0) {
    echo "Делится на $b: " . ($a / $b) . "<br>";
} else {
    echo "Делится с остатком: " . ($a % $b) . "<br>";

}

$st = pow(2, 10);
echo "2 в 10 степени: $st<br>";

$sqrt_245 = sqrt(245);
echo "Квадратный корень из 245: $sqrt_245<br>";

$numbers = [4, 2, 5, 19, 13, 0, 10];
$sum_squares = 0;
foreach ($numbers as $number)
{
    $sum_squares += $number ** 2;
}
echo "Корень из суммы квадратов: " . sqrt($sum_squares) . "<br>";

echo round(sqrt(379)) . "<br>";
echo round(sqrt(379), 1) . "<br>";
echo round(sqrt(379), 2) . "<br>";

echo "Корень из 587: " . ceil(sqrt(587)) . ", " . floor(sqrt(587)) . "<br>";

$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "Минимальное число: " . min($numbers) . "<br>";
echo "Максимальное число: " . max($numbers) . "<br>";

echo "Случайное число от 1 до 100: " . rand(1, 100) . "<br>";

$random_numbers = [];
for ($i = 0; $i < 10; $i++)
{
    $random_numbers[] = rand();
}
var_dump($random_numbers);

echo "<br>";

$a = 10;
$b = 7;
$c = 34;
$d = -66;
echo "Модуль разности $a и $b: " . abs($a - $b) . "<br>";
echo "Модуль разности $c и $d: " . abs($c - $d) . "<br>";

$numbers = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($numbers); $i++)
{
    $numbers[$i] = abs($numbers[$i]);
}
var_dump($numbers);

echo "<br>";

$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++)
{
    if ($number % $i == 0)
    {
        $divisors[] = $i;
    }
}
var_dump($divisors);

echo "<br>";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($numbers as $num)
{
    $sum += $num;
    $count++;
    if ($sum > 10)
    {
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
    if ($index < count($array))
    {
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
    if ($sum > 9)
    {
        return sumDigits($sum);
    } else
    {
        return $sum;
    }
}

echo sumDigits(803) . "<br>";

// 17
echo "<br>".'#17'."<br>";
$array = [];
for ($i = 1; $i <= 5; $i++)
{
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
foreach ($arr2D as $i)
{
    foreach ($i as $j)
    {
        $sum += $j;
    }
}
echo $sum. "<br>";

$counter = 1;
$multiDimArray = [];
for ($i = 0; $i < 3; $i++)
{
    $row = [];
    for ($j = 0; $j < 3; $j++)
    {
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
    return ($num1 + $num2 > 10) ? true : false;
}

echo checkSum(5, 6) ? 'true' : 'false';
echo "<br>";


function checkEquality($num1, $num2)
{
    return ($num1 == $num2) ? true : false;
}

echo checkEquality(5, 5) ? 'true' : 'false';
echo "<br>";


$test = 0;
echo ($test == 0) ? 'верно' : '';

echo "<br>";

$age = 54;
if ($age < 10 || $age > 99)
{
    echo "Число вне диапазона.";
} else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9)
    {
        echo "Сумма цифр однозначна.";
    } else
    {
        echo "Сумма цифр двузначна.";
    }
}

echo "<br>";

$arr = [1, 2, 3];
if (count($arr) == 3)
{
    echo array_sum($arr);
}

echo "<br>";

// 19
echo "<br>".'#19'."<br>";
for ($i = 1; $i <= 20; $i++)
{
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
