<?php
// https://www.codewars.com/kata/546e2562b03326a88e000020/train/php
/*  Добро пожаловать. В этом ката вас просят возвести в квадрат каждую цифру числа и соединить их.

Например, если мы пропустим через функцию 9119, получится 811181, потому что 9 2 равно 81, а 1 2 равно 1. (81-1-1-81)

Пример №2: Ввод 765 вернет/должен вернуть 493625, потому что 7 2 равно 49, 6 2 равно 36, а 5 2 равно 25. (49-36-25)

Примечание. Функция принимает целое число и возвращает целое число.  */

function square_digits($num): int {
    strval($num);
    $res = '';
    $num_array = str_split($num);
    foreach($num_array as $nums)
      {
        $square = pow((int)$nums, 2);
        $res .= strval($square);
      }
      return (int) $res;
    
    }


?>