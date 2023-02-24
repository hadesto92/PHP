<?php
    function drukuj($znak,$dlugosc){
        for($x=1;$x<=$dlugosc;$x++){
            echo" $znak ";
        }
    }
    
    drukuj('#',5);
    
    echo"<br><br>";
    
    function sprawdz($liczba1,$liczba2,$liczba3){
        if($liczba1 >= $liczba2 && $liczba1 >= $liczba3){
            echo "Liczba najwieksza jest: $liczba1";
        }
        elseif($liczba1 <= $liczba2 && $liczba2 >= $liczba3){
            echo "Liczba najwieksza jest: $liczba2";
        }
        else{
            echo "Liczba najwieksza jest: $liczba3";
        }
        
        
        
    }
    
    sprawdz(2,1,4);
    
    echo"<br><br>";
    
    
    function sprawdz_tab($liczba1,$liczba2,$liczba3){
        $tab = array($liczba1,$liczba2,$liczba3);
        sort($tab);
        return $tab[2];
    }
    
    
    echo "wynik: ".sprawdz_tab(3,7,2);
    
    echo"<br><br>";
    
    function wypisz($zmienna){
        $text = "<font face='Courier New' color='red'><i>$zmienna</i></font>";
        return $text;
    }
    
    echo "To jest tekst<br>";
    echo wypisz("To jest tekst");
?>