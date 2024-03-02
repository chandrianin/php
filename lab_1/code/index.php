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
