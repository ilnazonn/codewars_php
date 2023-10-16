<?php
/*  Рассмотрим массив/список овец, в котором некоторые овцы могут отсутствовать на своем месте. Нам нужна функция, которая подсчитывает количество овец, присутствующих в массиве (истина означает наличие).

Например,

[true,  true,  true,  false,
  true,  true,  true,  true ,
  true,  false, true,  false,
  true,  false, false, true ,
  true,  true,  true,  true ,
  false, false, true,  true]  */

  function countSheep($arr) {
    $count = 0;
    foreach($arr as $num){
      if($num){
        $count++;
      }   
      }
    return $count;
  }


?>