<!DOCTYPE html>
<html>
    <head>
		<title>REJESTRACJA</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<p>Informacje które tutaj zostawiasz robisz to na własną rękę. <br>Nie ponoszę odpowiedzialności za utratę danych z niezabezpieczonego serwera.</p>
		</div>
		<form method='POST' action='rejestracja.php'> <br>
			Podaj login: <input type=text name='login'/> <br>
			Podaj hasło: <input type=text name='haslo1'/> <br>
			Powtórz hasło: <input type=text name='haslo2'/> <br>
			Podaj e-mail: <input type=text name='email'/> <br>
			<input type="submit" value="Utwórz konto" name="rejestruj">
		</form>
		<?php
			if (isset($_POST['rejestruj'])){
				$login = $_POST['login'];
				$haslo1 = $_POST['haslo1'];
				$haslo2 = $_POST['haslo2'];
				$email = $_POST['email'];
				
                $cos = implode( '', file( 'dane.txt' ) );
                //echo $cos;
                $tab = [];
                $wynik = '';
                $licznik = 0;
                for($i=0; $i <= strlen($cos); $i++){
                    //echo $i;
                    if($cos[$i]==' '){
                        $tab[$licznik] = $wynik;
                        $licznik++;
                        $wynik = '';
                        
                    }
                    else{
                        $wynik .= $cos[$i];
                    }
                    
                    
                }
                
                //echo $tab[2];
                
				for($i=0; $i <= count($tab); $i++){
					if ($tab[$i] == $login){
						$check = true;
						echo "Podany login jest już zajęty.";
					}
				}

				if(!isset($check)){
					if ($haslo1 == $haslo2){
                        $stare_dane = implode( '', file( 'dane.txt' ) );
                        
						$flaga = 0;
						$i = 0;
						while($flaga == 0){
							if ($tab[$i]=='ID'){
								$ID = $tab[$i+1] + 1;
								$flaga = 1;
							}
							if($i >= count($tab)){
								$ID = 1;
								$flaga = 1;
							}
                            $i++;
						}
						
						$nowe_dane = 'ID ' . $ID . ' ' . $login . ' ' . $haslo1 . ' ' . $email . ' ';
						$nowe_dane .= $stare_dane;
                        
                        //echo $nowe_dane;
                        
						$plik = fopen("dane.txt", "w");
						fputs($plik, $nowe_dane);
						fclose($plik);
						
						echo "Konto zostało utworzone!";
					}
					else echo "Hasła nie są takie same";
				}
			}
		?>
	</body>
</html>