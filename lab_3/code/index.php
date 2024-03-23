<?php

// подключаю свой шрифт для браузера
echo '<style>@font-face {
font-family: "googleSans";
src: url("font/GoogleSans-Regular.ttf") format("ttf");
}
 * {
font-family: "googleSans", sans-serif;
font-size: 23px;
}
h2 {
    margin-left: 5px;
} 
h3 {
margin-left: 20px;
}
p {
margin-left: 30px;
}
</style > ';


/**<h2>1. Регулярные выражения</h2>*/

/**<h3>Подпункт a)</h3>*/
echo '<h2>Task №1</h2>';
$stringForSplit = 'ahb acb aeb aeeb adcb axeb';
$regularExpression = '/a[a-z]{2}b/';
$results = array();
preg_match_all($regularExpression, $stringForSplit, $results);
echo '<h3>а)</h3>';
for ($i = 0; $i < sizeof($results[0]); $i++) {
    echo "<p>{$results[0][$i]}</p>";
}

/**<h3>Подпункт b)</h3>*/
echo '<h3>б)</h3>';
$stringForSplit = 'a1b2c3';
$regularExpression = '/([a-z])([0-9])/';
$results = array();
$resultString = preg_replace_callback($regularExpression,
    function ($matches) {
        return $matches[1] . pow(intval($matches[2]), 3);
    },
    $stringForSplit);
echo "<p>$resultString</p>";


/**<h2>2. Форма. Сессии и Куки</h2>*/

/**<h3>Подпункт a)</h3>*/

echo "<a href='./second_task_a.php' target='_blank'>Task №2.a</a>";

/**<h3>Подпункт b)</h3>*/

/**<h3>Подпункт c</h3>*/

