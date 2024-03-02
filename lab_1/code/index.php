<?php

// подключаю свой шрифт для браузера, так как стандартный выглядит ужасно
echo '<style>@font-face {
    font-family: "googleSans";
    src: url("font/GoogleSans-Regular.ttf") format("ttf");
}
* {
font-family: "googleSans", sans-serif;
}
</style > ';
// теперь выглядит кратно лучше))


// ПУНКТ №1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " PU PU PU";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


// ПУНКТ №2

$intVariable = 9;
echo "<br>int: $intVariable<br>";/*Использую <br> вместо /n, так как открываю файл в браузере*/

$floatVariable = 3.14;
echo "float: $floatVariable<br>";
echo "12<br>"; /*не понял фразы
"Хитрость: используйте сложение или вычитание, чтобы напечатать оператор, который оценивается как 12, и число 12 не может появиться нигде в вашем коде!"
имеется в виду что-то вроде 11 + 1?*/

$lastMonth = 1187.23;
$currentMonth = 1089.98;
$difference = $lastMonth - $currentMonth;
echo "Разницы между расходами: $difference<br>";


// ПУНКТ №11

$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "$daysPerLanguage дня на язык<br>";


// ПУНКТ №12

$degree = 8 ** 2;
echo "Восемь в квадрате: $degree<br>";


// ПУНКТ №13

$myNum = 666;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$mathAnswer = $answer - $myNum;
echo "Если справа единица, то все хорошо: $mathAnswer<br>";


// ПУНКТ №14

$a = 10;
$b = 3;
$divisionRemainder = $a % $b;
echo "Остаток от деления равен $divisionRemainder";
if ($divisionRemainder == 0) {
    echo "$a делится на $b без остатка<br>";
} else {
    echo "$a делится на $b с остатком<br>";
}

$pow = pow(2, 10);
$sqrt1 = sqrt(245);
$tempArray = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($tempArray as $i) {
    $sum += $i;
}

$sqrt2 = round(sqrt(379));
$sqrt3 = round(sqrt(379), 1);
$sqrt4 = round(sqrt(379), 2);
$roundValues = [];
$roundValues["floor"] = floor(sqrt(579));
$roundValues["ceil"] = ceil(sqrt(579));
//echo $roundValues["floor"]; // проверил - работает
//echo "<br>";
//echo $roundValues["ceil"];

$minNumber = min(4, -2, 5, 19, -130, 0, 10);
$maxNumber = max(4, -2, 5, 19, -130, 0, 10);

echo "Случайно число от 1 до 100: " . rand(1, 100) . "<br>";
$tempArray = [];
foreach (range(0, 9) as $item) {
    $tempArray[] = rand(1, 100);
//    echo $tempArray[$item] . "<br>"; // проверка - работает
}

$module1 = abs(($a = 1) - ($b = 2));
$module2 = abs(($a = 24) - ($b = 12));
//echo $module1 . " " . $module2; // проверка

$tempArray = [1, 2, -1, -2, 3, -3];
foreach (range(0, count($tempArray) - 1) as $i) {
    if ($tempArray[$i] < 0) {
        $tempArray[$i] = abs($tempArray[$i]);
    }
    // проверка
    //    echo $tempArray[$i] . " ";
}

$remaindersArray = [];
$number = 666;
foreach (range(1, $number) as $remainder) {
    if ($number % $remainder == 0) {
        $remaindersArray[] = $remainder;
    }
}
// проверка:
//foreach ($remaindersArray as $item) {
//    echo $item . " ";
//}

$sumElementsArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0;
$sum = 0;
foreach ($sumElementsArray as $element) {
    $sum += $element;
    $count++;
    if ($sum > 10) {
        break;
    }

}
// проверка
//echo $count;

