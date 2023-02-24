<?php
    $a = 5;
    $b = 4;
    $c = 3;
    
    if($a==$b && $b==$c){
        echo "Trojkat o bokach $a, $b, $c jest rownoboczny";
    }
    elseif($a==$b||$b==$c||$a==$c){
        echo "Trojkat o bokach $a, $b, $c jest rownoramienny";
    }
    else{
        echo "Trojkat o bokach $a, $b, $c jest roznoboczny";
    }
?>