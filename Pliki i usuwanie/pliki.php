<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            //mkdir('pliki'); //tworzy katalog
            //touch('pliki/testowy.txt'); //tworzy plik
            if(file_exists('pliki/testowy.txt')){  //sprawdzenie czy plik istnieje
                echo 'Taki plik już istnieje. <br/>';
                //zapis
                $plik = fopen('pliki/testowy.txt','a+');
                fwrite($plik,"To jest tekst dodawany do pliku.<br/>");
                //odczyt
                $plik = fopen('pliki/testowy.txt','r');
                while($wiersz = fgets($plik,1024)){
                    echo "$wiersz <br>";
                }
            }
            else{
                mkdir('pliki');
                touch('pliki/testowy.txt');
                echo 'Utworzono plik testowy.txt w katalogu pliki.';
            }
        ?>
        
        <a href="delete.php">Usun plik</a>
    
    
    </body>
</html>