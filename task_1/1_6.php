<?php
    $str = 'Максимов Леонид Анатольевич';
    
    preg_match_all('/ (.)/iu',$str,$n);
     
    $n2 = explode(' ', $str);

    echo $n2[0] .' '. $n[1][0]. '.' . $n[1][1].'.';

    /*Решение верное, вот ещё один вариант:*/
    echo '<hr>';
    
    $result = '';

    for($i = 0; $i < count($n2); $i += 1){
        if($i === 0){
            $result .= "$n2[$i] ";
        }else{
            $abbr = mb_substr($n2[$i], 0, 1);
            $result .= "$abbr.";
        }
    }

    echo $result;
?>