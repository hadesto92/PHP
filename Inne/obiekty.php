<?php
    class Osoba{
    
        public $imie;
        public $nazwisko;
        public $wiek;
        
        function wypisz(){
            echo $this -> imie;
            echo "<br>";
            echo $this -> nazwisko;
            echo "<br>";
            echo $this -> wiek;
        }
        
        public function __construct(){ //konstruktor !!!sa 2x _ (podoga)!!!
            $this -> imie = 'imie';
            $this -> nazwisko = 'nazwisko';
            $this -> wiek = '?';
        }
        
        public function __destruct(){ //destruktor !!!sa 2x _ (podoga)!!!
            echo "<br>Usunito obiekt";
        }
    }
    
    class Uczen extends Osoba{ //dziedziczenie po klasie Osoba
        public $klasa;
        
        function wypisz(){
            echo $this -> imie;
            echo "<br>";
            echo $this -> nazwisko;
            echo "<br>";
            echo $this -> wiek;
            echo "<br>";
            echo $this -> klasa;
        }
    }
    
    //tworzenie
    
    $osoba1 = new Osoba();
    
    $osoba1->imie = "Karol";
    $osoba1->nazwisko = "Lach";
    $osoba1->wiek = 25;
    
    echo "<br>";
    
    $osoba2 = new Uczen();
    
    $osoba2->imie = "Kamil";
    $osoba2->nazwisko = "Bartoliński";
    $osoba2->wiek = 26;
    $osoba2->klasa = '2b';
    
    $osoba3 = new Uczen();
    
    $osoba3->nazwisko = "Herlanowski";
    $osoba3->klasa = '3e';
    
    //wypisanie
    
    echo $osoba1->imie."<br>";
    echo $osoba1->nazwisko."<br>";
    echo $osoba1->wiek."<br>";
    
    echo "<br><br>";
    
    echo $osoba2->wypisz();
    
    echo "<br><br>";
    
    echo $osoba3->wypisz();
    
    
?>