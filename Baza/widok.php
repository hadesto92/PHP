<?php
    include ('baza.php');

    if($polaczenie->connect_errno==0){
        echo"Uzyskano polaczenie z baza danych MySql! <br><br>";
        
        $resultat = $polaczenie->query('SELECT * FROM kontakty');
        
        if($resultat->num_rows > 0){
            echo"Sa rekordy<br>";
            echo"<table border='1' cellpading='10'>";
            echo"<tr>";
            echo"<th>id</th><th>Imie</th><th>Nazwisko</th><th>E-mail</th><th>Telefon</th>";
            echo"</tr>";
            while($wiersz = $resultat->fetch_array(MYSQLI_BOTH)){
                echo"<tr><td>".$wiersz['id']."</td>
                        <td>".$wiersz['Imie']."</td>
                        <td>".$wiersz['Nazwisko']."</td>
                        <td>".$wiersz['E-mail']."</td>
                        <td>".$wiersz['Telefon']."</td>
                        <td><a href='usuwanie.php?id=".$wiersz['id']."'>Usun</a></td>
                        <td><a href='edytowanie.php?id=".$wiersz['id']."'>Edytuj</a></td></tr>";
            }
            echo"</table>";
            echo"<a href='dodawanie.php'>Dodawanie nowego rekordu</a>";
        }
        else{
            echo"Brak rekordów do wyswietlenia. <br>";
        }
        
    }
    else{
        echo"Brak polaczenia z baza danych MySql!";
        echo"Blad: ".$polaczenie->connect_errno;
    }
?>		