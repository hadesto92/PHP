<?php
    unlink('pliki/testowy.txt'); //usuwanie pliku
    rmdir('pliki');//usuwanie katalogu
    
    header('location:pliki.php');
?>