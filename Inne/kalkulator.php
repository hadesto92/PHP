<html>
    <head>
        <title>Kalkulator</title>
    </head>
    <body>
    
        <br><br><br>
    
        <center>
            <form name='formularz' method='post'>
                <?php
                
                    @$dzialania = $_POST['wartosc'];
                
                    echo"<input id='wyswietlanie' type='text' name='wartosc2' size=50 readonly='readonly' value=$tab><br>";
                    echo"<input id='wprowadzanie'  type='text' name='wartosc' size=50 value=$dzialania>";
                    
                ?>
                
                <!-- Przyciski -->
                
                <br><br>
            
                <button id='dDodawanie' onClick='return fDodawanie()'>+</button>
                <button id='dOdejmowanie'onClick='return fOdejmowanie()'>-</button>
                <button id='dDzielenie' onClick='return fDzielenie()'>/</button>
                <button id='dMnozenie' onClick='return fMnozenie()'>*</button>
                <button id='dProcent' onClick='return fProcent()'>%</button><br>
                <button id='dPotegaDwa' onClick='return fPotegaDwa()'>x<sup>2</sup></button>
                <button id='dPotegaY' onClick='return fPotegaY()'>x<sup>y</sup></button>
                <button id='dPierwiastekDwa' onClick='return fPierwiastekDwa()'><sup>2</sup>/<sup>-</sup>x</button>
                <button id='dPierwiastekY' onClick='return fPierwiastekY()'><sup>y</sup>/<sup>-</sup>x</button><br>
                <button id='dNawiasL' onClick='return fNawiasL()'>(</button>
                <button id='dNawiasP'onClick='return fNawiasP()'>)</button>
                <br><br>
                <input type='submit' name='wynik' value='='>
                
                <!-- Funkcje liczace -->
                
                <?php
                    function dodawanie($x,$y){
                        $wynik = $x+$y;
                        return $wynik;
                    }
                    
                    function odejmowanie($x,$y){
                        $wynik = $x-$y;
                        return $wynik;
                    }
                    
                    function mnozenie($x,$y){
                        $wynik = $x*$y;
                        return $wynik;
                    }
                    
                    function dzielenie($x,$y){
                        $wynik = $x/$y;
                        return $wynik;
                    }
                    
                    function procent($x,$y){
                        $wynik = ($x*$y)/100;
                        return $wynik;
                    }
                    
                    function potega_dwa($x){
                        $wynik = pow($x,2);
                        return $wynik;
                    }
                    
                    function potega_y($x,$y){
                        $wynik = pow($x,$y);
                        return $wynik;
                    }
                    
                    function pierwiaste_dwa($x){
                        $wynik = sqrt($x);
                        return $wynik;
                    }
                    
                    function pierwiastek_y($x,$y){
                        $wynik = ($x^(1/$y));
                        return $wynik;
                    }
                    
                ?>
                
                <!-- Obliczenia -->
                
                <?php
                    if($_POST['wynik']){
                        $spr=0; //spr jest zmienna która pokazuje jak duża jest tablica count nie za bardzo dzialal
                        while(1){ 
                            $spr = $spr +1;
                            if($dzialania[$spr]==null){
                                break;
                            }
                        }
                        
                        $i=0;
                        $j=0;
                        
                        while(1){
                            if(is_numeric($dzialania[$i])||$dzialania[$i]=='.'){
                               $tab[$j] = $tab[$j].$dzialania[$i];
                               //echo "<br>$tab[$j]";
                               if(!is_numeric($dzialania[$i+1]) && $dzialania[$i+1] !='.'){
                                   $j++;
                               }
                            }
                            else{
                               $tab[$j] = $dzialania[$i];
                                $j++;
                            }
                            $i++;
                            
                            if($dzialania[$i]==null){
                                break;
                            }
                        }
                        
                        $i=0;
                        $j=0;
                        
                        //echo "<br>";
                        
                        //print_r($tab);
                        
                        //echo "<br>";
                        
                        while(1){ 
                            
                            if(!is_numeric($tab[$i])){
                                if($tab[$i]=='('){
                                    //(2+2+2)+2
                                    if($i==0){
                                        while(1){
                                            if($tab[$i]=='+'){                                        
                                                $zmienna = array(dodawanie($tab[$i-1],$tab[$i+1]));
                                                
                                                echo "<br> $zmienna[0] <br>";
                                                
                                                $tab = array_merge($zmienna,array_slice($tab,$i+2,count($tab)));
                                                
                                                print_r($tab);
                                                echo "<br>";
                                                
                                                $i=0;
                                            }
                                            elseif($tab[$i]==')'){
                                                $tab = array_merge($zmienna,array_slice($tab,$i+1,count($tab)));
                                                $i=1;
                                                break;
                                            }
                                            else{
                                                $i++;
                                            }
                                        }
                                    }
                                    else{
                                        while(1){
                                            if($tab[$i]=='+'){                                        
                                                $zmienna = array(dodawanie($tab[$i-1],$tab[$i+1]));
                                                
                                                echo "<br> $zmienna[0] <br>";
                                                
                                                $tab = array_merge(array_slice($tab,0,$i-2),$zmienna,array_slice($tab,$i+2,count($tab)));
                                                
                                                print_r($tab);
                                                echo "<br>";
                                                
                                                $i=0;
                                            }
                                            elseif($tab[$i]==')'){
                                                $tab = array_merge(array_slice($tab,0,$i-1),$zmienna,array_slice($tab,$i+1,count($tab)));
                                                $i=1;
                                                break;
                                            }
                                            else{
                                                $i++;
                                            }
                                        }
                                    }
                                }
                                elseif($tab[$i]=='+'){                                        
                                    $zmienna = array(dodawanie($tab[$i-1],$tab[$i+1]));

                                    $tab = array_merge($zmienna,array_slice($tab,$i+2,count($tab)));

                                    $i=0;
                                }
                            }
                            
                            $i++;
                            if($tab[$i]==null){
                                break;
                            }
                        }
                        
                        print_r($tab);
                        
                    }
                ?>
                
                <script>
                
                    function fDodawanie(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"+";
                        return false;
                    }
                    
                    function fOdejmowanie(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"-";
                        return false;
                    }
                    
                    function fMnozenie(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"*";
                        return false;
                    }
                    
                    function fDzielenie(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"/";
                        return false;
                    }
                    
                    function fProcent(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"%";
                        return false;
                    }
                    
                    function fPotegaDwa(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"^2";
                        return false;
                    }
                    
                    function fPotegaY(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"^";
                        return false;
                    }
                    
                    function fPierwiastekDwa(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value;
                        return false;
                    }
                    
                    function fPierwiastekY(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value;
                        return false;
                    }
                    
                    function fNawiasL(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+"(";
                        return false;
                    }
                    
                    function fNawiasP(){
                        document.getElementById("wprowadzanie").value = document.getElementById("wprowadzanie").value+")";
                        return false;
                    }
                    
                </script>
            </form>
        </center>
    </body>
</html>