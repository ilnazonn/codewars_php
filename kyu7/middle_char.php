<?php
/* Вам будет предоставлено слово. Ваша задача — вернуть средний символ слова. Если длина слова нечетная, верните средний символ. Если длина слова четная, верните 2 средних символа.

#Примеры:

Kata.getMiddle("test") should return "es"

Kata.getMiddle("testing") should return "t"

Kata.getMiddle("middle") should return "dd"

Kata.getMiddle("A") should return "A"
#Вход

Слово (строка) длины 0 < str < 1000(в некоторых тестовых примерах в javascript из-за ошибки в тестовых примерах вы можете получить немного больше 1000). Для этого вам не нужно проходить тестирование. Это сделано только для того, чтобы сообщить вам, что вам не нужно беспокоиться о тайм-ауте вашего решения.

#Выход

Средний символ(ы) слова, представленного в виде строки. */

function getMiddle($text) {
    $str_array = str_split($text);
    $count = count($str_array);
    if($count % 2 == 0){
      $middleIndex = ($count / 2) - 1;
      $middleValue1 = $str_array[$middleIndex];
      $middleValue2 = $str_array[$middleIndex + 1];
      $res = $middleValue1 . $middleValue2;
      return $res;
    }else{
      $middleIndex = ($count / 2);
      $middleValue1 = $str_array[$middleIndex];
      $res = $middleValue1;
      return $res;
    }
    }
?>