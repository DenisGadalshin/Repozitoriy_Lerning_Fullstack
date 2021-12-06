<?php

$name = 'Denis';

echo $name . ' - ' . gettype($name) . '<br>'; // gettype - выводит тип данных хранящийся в переменной

$age = 34;

echo $age . ' - ' . gettype($age) . '<br>';

$money = 999.99;

echo $money . ' - ' . gettype($money) . '<br>';

$isRein = true;

echo $isRein . ' - ' . gettype($isRein) . '<br>';

echo $nonExist . ' - ' . gettype($nonExist) . '<br>';

echo '<hr>';

if ($name) {
    echo '$name true <br>';
} else {
    echo '$name false <br>';
}

$emtyString = '';

if ($emtyString) {
    echo '$emtyString true <br>';
} else {
    echo '$emtyString false <br>';
}

$number = 99;
if ($number) {
    echo '$number true <br>';
} else {
    echo '$number false <br>';
}

$zeroString = '0';
if ($zeroString) {
    echo '$zeroString true <br>';
} else {
    echo '$zeroString false <br>';
}

$space = ' ';
if ($space) {
    echo '$space true <br>';
} else {
    echo '$space false <br>';
}

$zero = 0;
if ($zero) {
    echo '$zero true <br>';
} else {
    echo '$zero false <br>';
}

$false = false;
if ($false) {
    echo '$false true <br>';
} else {
    echo '$false false <br>';
}

$null = NULL;
if ($null) {
    echo '$null true <br>';
} else {
    echo '$null false <br>';
}

if ($null == $false){
    echo '$null == $false true <br>';   // == опреатор сравнения. Данный оператор использкется для сравнения двух переменных
} else {
    echo '$null == $false false <br>';
}
/**
 * === опреатор строгово сравнения. 
 * Данный оператор используется для сравнения значения двух переменных
 * а также сравнения их типа данных
 */

if ($null === $false){
    echo '$null === $false true <br>';
} else {
    echo '$null === $false false <br>';
}

if (0 == ""){
    echo '0 == "" true <br>';
} else {
    echo '0 == "" false <br>';
}

if (0 === ""){
    echo '0 === "" true <br>';
} else {
    echo '0 === "" false <br>';
}

echo '<hr>';

echo "My neme\'s Denis <br>";



$message = "занчение переменной name = $name";
echo $message;

echo '<hr>';

$number = 10;
$number++;
echo $number;
echo '<br>';
$number--;
echo $number;

echo '<br>';

$n = 10;
$new_number = $n++;
echo $new_number;
echo '<br>';

$n = 10;
$new_number = ++$n;
echo $new_number;
echo '<br>';

echo '<hr>';

$n = 10;
$n += 1;
echo $n;

echo '<hr>';

$name = 'Denis';
$name .= ' Gadalshin';
echo $name;