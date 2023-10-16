<?php
/* Вам дан массив (длина которого должна быть не менее 3, но может быть и очень большой), содержащий целые числа. Массив либо полностью состоит из нечетных целых чисел, либо полностью состоит из четных целых чисел, 
за исключением единственного целого числа N. Напишите метод, который принимает массив в качестве аргумента и возвращает этот "выброс" N.
[2, 4, 0, 100, 4, 11, 2602, 36] -->  11 (the only odd number)

[160, 3, 1719, 19, 11, 13, -21] --> 160 (the only even number)

*/
function find($integers) {
    $even_numbers = [];
    $odd_numbers = [];
    foreach ($integers as $number) {
        if (!($number % 2)) {
            $even_numbers[] = $number;
        }else{
          $odd_numbers[] = $number;
        }
    }
     $res =count($even_numbers) === 1 ? $even_numbers[0] : $odd_numbers[0]; 
    return $res;
}


?>