<?php

$number = 1;

while ($number < 10) {
    echo $number . '<br>';
    $number++;
}

echo '<hr>';

echo '<select>';
echo '<option selected disabled>--Выберите значение--</option>';
for ($i = 1; $i < 10; $i++){
    echo "<option>$i</option>";
}
echo '</select>';

echo '<hr>';

$fahrenheite = -50;
while ($fahrenheite <= 50) {
    $celsius = round(($fahrenheite - 32)*5/9, 2);
    echo $fahrenheite . '°F = ' . $celsius . '°C' . '<br>';
    $fahrenheite++;
}