<?php
/* Ваша задача — создать функцию, которая может принимать в качестве аргумента любое неотрицательное целое число и возвращать его с цифрами в порядке убывания. По сути, переставьте цифры, чтобы получить максимально возможное число.

Примеры:
Вход: 42145 Выход:54421

Вход: 145263 Выход:654321

Вход: 123456789 Выход:987654321   */

function descendingOrder(int $n): int {
    $str_num = strval($n);
    $array = str_split($n);
    $max = rsort($array);
    $str = implode("", $array);
    return (int)($str);
    }

?>