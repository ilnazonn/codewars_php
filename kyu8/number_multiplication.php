<?php
/*  Ваши одноклассники попросили вас скопировать для них кое-какие документы. Вы знаете, что одноклассников n, а в документах m страниц.

Ваша задача — посчитать, сколько пустых страниц вам нужно. Если n < 0или m < 0вернуть 0.

Пример:
n= 5, m=5: 25
n=-5, m=5:  0 */

function paperwork(int $n, int $m): int
{
if($n < 0 || $m < 0)
  {
  return 0;
}else{
  $sum = $n * $m;
  return $sum;
}
}

?>