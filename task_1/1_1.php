<?php

     $var = 789;
     $var  .= ' ';
     echo $res= $var[0]+$var[1]+$var[2];

     /*Вариант решения*/
     echo "<hr>";
     $str = (string)789;

     $result = 0;

     for($i = 0; $i < strlen($str); $i += 1){
         $result += (int)$str[$i];
     }
     echo "$result";
?>