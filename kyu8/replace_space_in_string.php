<?php
/* Напишите функцию, которая удаляет пробелы из строки, 
а затем возвращает результирующую строку.  */
function no_space(string $s): string {
    return preg_replace( '/\s+/' , '' , $s );
  }
?>