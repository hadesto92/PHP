<?php
    
    try{
        $dzielna = 8;
        $dzielnik = 0;
        if($dzielnik == 0){
            throw new Exception("testowy obiekt wyjatku.", 123);
        }
        else{
            print("Wynik dzielenia to: ".$dzielna/$dzielnik);
        }
    }
    
    catch(Exception $e){
        echo "Zostal wygenerowany wyjatek!<br>";
        echo "Tresc komunikatu: ".$e->getMessage()."<br>";
        echo "Kod bledu: ".$e->getCode()."<br>";
        echo "Nazwa pliku z bledem: ".$e->getFile()."<br>";
        echo "Nr linii: ".$e->getLine()."<br>";
    }
    
?>