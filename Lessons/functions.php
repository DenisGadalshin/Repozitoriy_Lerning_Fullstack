<?php

function sayHello () {
    echo "hello<br>";
}

function plusOne ($a) {
    echo ++$a . '<br>';
}

function multiply ($a, $b) {
    echo $a * $b . '<br>';
}

function sumNumbers ($a, $b, $c = 0) {
    echo $a + $b + $c . '<br>';
}

sayHello();

echo 'HI!<br>';

sayHello();

sayHello();

plusOne(55);

$number = 18;

plusOne($number);

multiply(10, 5);

sumNumbers(1, 2, 10);