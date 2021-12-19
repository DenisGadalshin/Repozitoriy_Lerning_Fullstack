<?PHP

//Первая задача по ссылке: https://www.codewars.com/kata/582cb0224e56e068d800003c/php

$time = 11.8;

function litres ($t) {
    return floor ($t * 0.5);
}

echo litres($time) . '<hr>';

//вторая задача по ссылке: https://www.codewars.com/kata/57a0e5c372292dd76d000d7e


function repeateStr (int $n, $str) {
    $repStr = '';
    for ($i = 1; $i <= $n; $i++) {
        $repStr .= $str;
    }
    return $repStr;
}

echo repeateStr(5, 'Hello') . '<hr>';

//третья задача по ссылке: https://www.codewars.com/kata/5933a1f8552bc2750a0000ed/php

function nthEven($n) {
    $even = ($n-1)*2;
    return $even;
}

echo nthEven(1298734) . '<hr>';

//четвертая задача по ссылке: https://www.codewars.com/kata/5168bb5dfe9a00b126000018/php

function solution($str) {
    $length = strlen($str);
    $revWorld = "";
    for ($i = --$length; $i >= 0; $i--) {
        $revWorld .= $str[$i];
    }
    return $revWorld;
}

echo solution('Hello wold') . '<hr>';

// пятая задача по ссылке: https://www.codewars.com/kata/5859c82bd41fc6207900007a/php

function quotable ($name, $quote) {
    return $name . ' said: "' . $quote . '"';
}

echo quotable('Oscar Wilde', 'I am not young enough to know everything') . '<hr>';

// шестая задача по ссылке: https://www.codewars.com/kata/54ff3102c1bad923760001f3/php

function getCount ($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $lengthStr = strlen($str);
    for ($i = 0; $i < $lengthStr; $i++) {
        if (in_array ($str[$i], $vowels)) {
            $vowelsCount += 1;
        }
    } 
    return $vowelsCount;
}

echo getCount('inputaaaa') . '<hr>';

// седьмая задача по ссылке: https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec/php

// function persistence(int $num): int {
//     $strNum = "(str)$num";
//     $lenStrNum = strlen($strNum);
//     $counterMult = 0;
//     if ($lenStrNum > 1){
//         $length_NewStr = $lenStrNum;
//         while ($lenStrNum > 1) {
//             $newNum = 1;
//             for ($i = 0; $i < $lenStrNum; $i++) {
//                 $newNum *= $strNum[$i];
//             }
//             $length_NewStr = strlen('(str)$newNum');
//         }
//     }
    
// }

