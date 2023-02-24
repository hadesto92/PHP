<?php
    $tab_samochod = array('Alfa','BMW','Hyundai','Audi');
    $tab_samochod[] = 'Dacia';
    
    print_r($tab_samochod);
    
    echo '<br>';
    
    echo $tab_samochod[2];
    
    echo '<br>';
    
    $ile = count($tab_samochod);
    
    echo $ile;
    
    echo '<br>';
    
    
    for($i=0; $i <= $ile; $i++){
        echo $tab_samochod[$i];
        echo '<br>';
    }
    
    sort($tab_samochod);  //rosnace
    print_r($tab_samochod);
    echo "<br>";
    
    
    
    rsort($tab_samochod); //malejcae
    print_r($tab_samochod);
    echo "<br>";
    
    echo "<br><br>";
    
    //tablice asocjacyjne
    
    $tab_kolor = array('czerwony'=>'red','niebieski'=>'blue','bialy'=>'white','zielony'=>'green','czarny'=>'black','zolty'=>'yellow');
    
    $tab_kolor['szary'] = 'grey';
    
    
    print_r($tab_kolor);
    
    echo '<br>';
    
    echo $tab_kolor["czerwony"];
    
    echo '<br>';
    
    $ile2 = count($tab_kolor);
    
    echo $ile2;
    
    echo '<br>';
    
    
    foreach($tab_kolor as $klucz=>$wartosc){
        echo $klucz." => ".$wartosc."<br>";
    }
    echo '<br>';
    
    asort($tab_kolor);  //rosnace
    print_r($tab_kolor);
    echo "<br>";
    
    
    
    arsort($tab_kolor); //malejcae
    print_r($tab_kolor);
    echo "<br>";
    
    ksort($tab_kolor);  //rosnace wedug klucza
    print_r($tab_kolor);
    echo "<br>";
    
    
    
    krsort($tab_kolor); //malejcae wedug klucza
    print_r($tab_kolor);
    echo "<br>";
    
    
?>