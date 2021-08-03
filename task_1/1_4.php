<?php
   $var = 789;
   $var .= []; // лучше преобразовывать явно, например конструкцией (string)$var
   $sum = 0;

  
   for( $i = 0; $i < 3; $i++) {
        if($var[$i] % 2) 
        $sum += $var[$i]; 
   }
   echo $sum;

   /*Решение верное, вот ещё вариант:*/
    echo '<hr>';
    $var = 789;
    $var = (string)$var;
    $sum = 0;

   for( $i = 0; $i < strlen($var); $i++) {
        $item = (int)$var[$i];
        if($item % 2 === 0){
            continue;
        }
        $sum += $var[$i]; 
   }
   echo $sum;