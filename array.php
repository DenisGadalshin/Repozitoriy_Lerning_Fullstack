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

echo '<hr>';

$colors = ['red', 'grine', 'blue'];

$output = '';

foreach ($colors as $color) {
    $output = $output . ' ' . $color;
}

echo trim($output);

echo '<br>';

$string_colors = implode(' ', $colors);

echo "$string_colors<br>";

$new_string = 'Предложение из 4 слов';

$arey = explode(' ', $new_string);

print_r($arey);

$numbers = [2, 4, 6, 1, 3];

print_r($numbers);

sort($numbers);

print_r($numbers);

echo '<br>';

print_r($person);

sort($person);

print_r($person);


$person = [
    'name' => 'Denis',
    'age' => '35',
    'city' => 'London',
    'language' => 'PHP'
];

asort($person);

print_r($person);

ksort($person);

print_r($person);

rsort($numbers);

print_r($numbers);

arsort($person);

print_r($person);

krsort($person);

print_r($person);

echo '<hr>';

$persons = [
    [
        'name' => 'Denis',
        'age' => '35',
        'sity' => 'London'
    ],
    [
        'name' => 'Jone',
        'age' => '25',
        'city' => 'Madrid'
    ],
    [
        'name' => 'Petr',
        'age' => '40',
        'city' => 'Kazan'
    ]
];

function sortByAge ($a, $b) {
    if ($a['age'] > $b['age']) {
        return 1;
    } else if ($a['age'] < $b['age']) {
        return -1;
    } else {
        return 0;
    }
}

function sortBySity ($a, $b) {
    if ($a['sity'] > $b['sity']) {
        return 1;
    } else if ($a['sity'] < $b['sity']) {
        return -1;
    } else {
        return 0;
    }
}
usort($persons, 'sortByAge');

usort($persons, 'sortBySity');

print_r($persons);
