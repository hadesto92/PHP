<?php 
    function losuj(){
        for($i=0;$i<=9;$i++){
            $tab[$i] = rand(1,15);
            $suma = $suma + $tab[$i];
        }
        return $suma;
    }
?>