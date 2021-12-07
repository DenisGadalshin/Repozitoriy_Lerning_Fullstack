<?php

$numbers = [1, 2, 3, 4, 5];

echo $numbers [1];
echo '<br>';

echo '<pre>';
print_r($numbers);
echo '<br>';

$count = count($numbers);
echo $count;

echo '<br>';

for ($i = 0; $i < $count; $i++) {
    echo "$i - $numbers[$i]" . '<br>';
}

echo '<hr>';

foreach ($numbers as $key => $value) {
    echo "$key: $value <br>";
}

$new_numbers = [];

for ($i = 0; $i < 10; $i++) {
    $new_numbers[] = $i;
}

$new_numbers[3] = 99;
$new_numbers [10] = 100;

$new_numbers [67] = 67 * 67;

echo '<pre>';
print_r($new_numbers);

$new_numbers [10] = 100;

$person = [
    'name' => 'Denis',
    'age' => '35',
    'city' => 'London',
    'language' => 'PHP'
];

echo '<hr>';

echo $person['name'];

$person['car'] = true;

