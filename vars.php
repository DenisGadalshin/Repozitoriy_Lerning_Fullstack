<?php

$name = "Denis";
$age = 28;

// Это строчка кометария

/**
 * Это многострочный комментарий
 * Новая строка
 */

echo $name;
echo "<br>";
echo $age;

$name = 'Ivan';

echo '<br>';
echo $name;

$last_name = 'Gadalshin';

$fullName = $name . ' ' . $last_name;
//это соединение двух переменных'


echo '<br>';
echo $fullName;

$word = 'lower_case';

$word = strtoupper($word);

echo '<br>';
echo $word;

$upperCase = 'UPPER_CASE';
$upperCase = strtolower($upperCase);

echo '<br>';
echo $upperCase;

$password = 'qwerty ';
echo $password . '!';
echo '<br>';
echo trim($password) . '!';

$number = 5 * 5;

echo '<br>';
echo $number * 2;


$gamburger = 4.95;
$Coctaile = 1.95;
$coca_colla = 0.85;
$tips = 0.16;
$NDS = 0.075;

echo '<br>';
echo '<br>';
$sum_gamburger = $gamburger * 2;
echo '2 Гамбургера ' . $sum_gamburger;
echo '<br>';
echo '1 коктейль за ' . $Coctaile;
echo '<br>';
echo '1 кока-колла за ' . $coca_colla;
echo '<br>';
$tip_ammout = ($sum_gamburger + $Coctaile + $coca_colla) * $tips;
echo 'чаевые 16% ' . $tip_ammout;
$total_NDS = ($sum_gamburger + $Coctaile + $coca_colla + $tip_ammout)*$NDS;
echo '<br>';
echo 'НДС 7,5% ' . $total_NDS;
echo '<br>';
echo 'ИТОГО: ' . ($sum_gamburger + $Coctaile + $coca_colla + $tip_ammout + $total_NDS);
