<?php
/* В этом небольшом задании вам дается строка чисел, разделенных пробелами, и вы должны вернуть наибольшее и наименьшее число.

Примеры
highAndLow("1 2 3 4 5");  // return "5 1"
highAndLow("1 2 -3 4 5"); // return "5 -3"
highAndLow("1 9 3 4 -5"); // return "9 -5"  */

function highAndLow($numbers)
{
    $array = explode(" ", $numbers);
    $maxValue = max($array);
    $minValue = min($array);
    $result = $maxValue . ' ' . $minValue;
    return $result;
}

?>