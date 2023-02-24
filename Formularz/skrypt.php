<?php
    $imie = $_GET['pole1'];
    $nazwisko = $_GET['pole2'];
    echo "<h1>METODA GET</h1><br>";
    echo "Z formularza odczytano warotsc: $imie $nazwisko<br>";
    
    $imie = $_POST['pole1'];
    $nazwisko = $_POST['pole2'];
    echo "<h1>METODA POST</h1><br>";
    echo "Z formularza odczytano warotsc: $imie $nazwisko<br>";
?>