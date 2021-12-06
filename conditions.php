<?php

    $number = 4;

    if ($number > 5) {
        echo 'число больше 5';
        echo '<br>';
        echo '!';
    }

    echo '<br>';
    echo 'Эта строка выводится всегда';

    if ($number > 5) {
        echo '<br>';
        echo 'число больше 5';
    } else {
        echo '<br>';
        echo 'число меньше или равно 5';
    }

    if ($number > 5) {
        echo '<br>';
        echo 'число больше 5';
    } else if ($number > 3) {
        echo '<br>';
        echo 'число меньше или равно 5, но больше 3';
    } else if ($number > 0) {
        echo '<br>';
        echo 'либо 1, либо 2, либо 3';
    } else {
        echo '<br>';
        echo 'либо 0 или отрицательное';
    }

    $second_number = 0;

    echo '<hr>';

    if ($number > 0 and $second_number == 0) {
       echo '$number > 0  и $second-number равно 0';
    }

    if ($number > 0 or $second_number == 0) {
        echo '<br>';
        echo '$number > 0  и $second-number равно нулю';
    }

    if ($number > 0) {
         if ($number > 2) {
             echo '<br>';
             echo 'число больше 2';
        }
    }




echo '<hr>';

    $age = 20;

    if ($age > 18) {
        echo 'Закончили школу';
    } else if ($age > 6 and $age < 19) {
        echo 'Вы в школе';
    } else {
        echo 'Вы дошкольник';
    }

