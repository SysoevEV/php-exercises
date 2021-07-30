<?php

  function if_natural($n){ /*prime? + предикатные функции как правило начинаются с преставки is_*/
    if($n==1 or $n==0)return false;
    for($d=2; $d*$d<=$n; $d++)
        { 
            if($n%$d==0)return false;
        }
    return true;
    }
  $array = range(0,1121);
    
  foreach($array as $key => $value)
    {
        if(!if_natural($value)) unset($array["$key"]);
    }
  $array2 = array_reverse($array);
  print_r($array2);   

  /*Молодец, решила правильно! Посмотри также мой вариант:*/
  
  $array = range(2,1121);

  $is_prime = function (int $n):bool{
    if($n < 2) return false;
    for($i = 2; $i <= floor($n / 2); $i += 1){
        if($n % $i === 0) return false;
    }
    return true;
  };

  $result = array_filter($array, $is_prime);

  rsort($result);

  echo '<pre>';

  print_r($result);

?> 