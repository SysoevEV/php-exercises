<?php
     $arr = [1,22,4,3,4,5,6,7,8,9,3,5,91];
     $sum = 0;
    
     for( $i = 0; $i < 13; $i++) {
          if($arr[$i] % 2) 
          $sum += $arr[$i]; 
     }
     echo $sum;

   /*Решение верное, вот ещё вариант:*/
    echo '<hr>';
    $arr = [1,22,4,3,4,5,6,7,8,9,3,5,91];
    $sum = 0;

   for( $i = 0; $i < count($arr); $i++) {
        $item = (int)$arr[$i];
        if($item % 2 === 0){
            continue;
        }
        $sum += $arr[$i]; 
   }
   echo $sum;
?>