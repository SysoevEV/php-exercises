<?php
     $n = 7;
     echo array_product(range(1, $n));

     /*Изящное решение у тебя, вот ещё вариант с циклом:*/
     echo '<hr>';
     $result = 1;
     for($i = 1; $i <= $n; $i += 1){
         $result *= $i;
     }
     echo $result;
?>