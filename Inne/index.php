<!DOCTYPE html>
<html>
  <head>
    <title>Formularz kontaktowy</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
	<body>
		<h1>Formularz</h1>


		<form method="post" action="index.php">

			<table>
				<tr><td><b>Imię:</b></td><td><input type="text" name="Imie" size="30" maxlength="30"  /></td></tr>
				<tr><td><b>Nazwisko:</b></td><td><input type="text" name="Nazwisko" size="30" maxlength="40" /></td></tr>
				<tr><td><b>PESEL:</b></td><td><input type="text" name="PESEL" size="30" maxlength="11" /></td></tr>
				<tr><td><b>Kod pocztowy:</b></td><td><input type="text" name="kod-pocztowy1" size="2" maxlength="2" />-<input type="text" size="3" name="kod-pocztowy2" maxlength="3" /></td></tr>
			</table>
			<br/>
			<br/>
			<b>Płeć:</b><br/>
			<input type="radio" name="plec" value="Kobieta"/>Kobieta <br/>
			<input type="radio" name="plec" value="Mezczyzna"/>Mężczyzna <br/>
			<br/>


			<b>Województwo:</b><br/>
			<select name="wojewodztwo">
			<option>Dolnośląskie
			<option>Kujawsko-Pomorskie
			<option>Lubelskie
			<option>Lubuskie
			<option>Małopolskie
			<option>Mazowieckie
			<option>Opolskie
			<option>Podkarpackie
			<option>Podlaskie
			<option>Pomorskie
			<option>Śląskie
			<option>Świętokrzyskie
			<option>Warmińsko-Mazurskie
			<option>Wielkopolskie
			<option>Zachodnio-Pomorskie
			</select>

			<br/>
			<br/>

			<b>Zainteresowania:</b><br/>
			<input type="checkbox" name="zainteresowania[]" value="Literatura"/>Literatura <br/>
			<input type="checkbox" name="zainteresowania[]" value="Film"/>Film <br/>
			<input type="checkbox" name="zainteresowania[]" value="Fotografia"/>Fotografia <br/>  
			<input type="checkbox" name="zainteresowania[]" value="Turystyka"/>Turystyka <br/>
			<input type="checkbox" name="zainteresowania[]" value="Malarstwo"/>Malarstwo <br/>
			<input type="checkbox" name="zainteresowania[]" value="Taniec"/>Taniec <br/>
			<input type="checkbox" name="zainteresowania[]" value="Sport"/>Sport <br/>
			<input type="checkbox" name="zainteresowania[]" value="Inne"/>Inne <br/>
			<br/>


			<input type="reset" value="Wyczyść formularz" />
			<input type="submit" value="Wyślij" />

		</form>
		<br><br>
		<?php
			if($_POST['Wyślij']){
				$imie = $_POST['Imie'];
				$nazwisko = $_POST['Nazwisko'];
				$pesel = $_POST['PESEL'];
				$kod_pocztowy = $_POST['kod-pocztowy1']."-".$_POST['kod-pocztowy2'];
				$plec = $_POST['plec'];
				$woje = $_POST['wojewodztwo'];
				$zain = $_POST['zainteresowania'];
			
			
			
				echo "Imie: $imie<br>";
				echo "Nazwisko: $nazwisko<br>";
				echo "PESEL: $pesel<br>";
				echo "Kod pocztowy: $kod_pocztowy<br>";
				echo "Plec: $plec<br>";
				echo "Wojewodztwo: $woje<br>";
				echo "Zainteresowania:"; 
				foreach($zain as $zain){
					echo "$zain ";
				}
			}
		?>

	</body>
</html>