<?php
    $zmienna = 10;
    
    $wynik = 1;
    
    echo "Silnia dla $zmienna wynosi w:<br>";
    
    for($a=1;$a<=$zmienna;$a++){
        $wynik = $wynik*$a;
    }
    
    echo "for: $wynik <br>";
    
    $a = 1;
    $wynik = 1;
    
    while($a<=$zmienna){
        $wynik = $wynik*$a;
        $a++;
    }
    
    echo "while: $wynik <br>";
    
    $a = 1;
    $wynik = 1;
    
    do{
        $wynik = $wynik*$a;
        $a++;      
    }while($a<=$zmienna);
    
    echo "do_while: $wynik <br>";
?>