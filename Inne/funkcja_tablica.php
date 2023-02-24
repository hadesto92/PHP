<?php

    function liczaca($liczba_a,$liczba_b){
    
        if($liczba_a > $liczba_b){
            $liczba1 = $liczba_b;
            $liczba2 = $liczba_a;
        }
        elseif($liczba_a < $liczba_b){
            $liczba1 = $liczba_a;
            $liczba2 = $liczba_b;
        }
        else{
            return $liczba_a;
        }
        
        $ilosc_zmiennych = $liczba2 - $liczba1;
            
        $liczba = $liczba1;
        
        for($i=0;$i <= $ilosc_zmiennych; $i++){
            $tab[$i]=$liczba;
            $liczba++;
        }
            
        //print_r($tab);
            
        $wynik = 0;
            
        for($i=0;$i <= $ilosc_zmiennych; $i++){
            $wynik = $wynik + $tab[$i];
        }
        
        return $wynik;
            
    }
    
    
    echo "<form name='formularz' method='post'>";
        echo "Podaj liczbe A: <input type='text' name='liczbaA' /><br>";
        echo "Podaj liczbe B: <input type='text' name='liczbaB' /><br>";
        echo "<input type='submit' name='przycisk' value='Oblicz' /><br><br><br>";
    echo "</form>";
    
    @$liczbaa = $_POST['liczbaA'];
    @$liczbab = $_POST['liczbaB'];
    
    
    if($_POST['przycisk']){
        $wartosc = liczaca($liczbaa,$liczbab);
        
        echo "<br>";
        
        echo "Wynik: $wartosc";
    }

?>