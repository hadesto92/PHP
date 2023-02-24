<html>
	<head>
		<meta charset='utf-8'>
		<title>Komis Samochodowy</title>
		<link rel="stylesheet" type="text/css" href="auto.css">
	</head>
	<body>
		<div class="baner">
			<h1>SAMOCHODY</h1>
		</div>
		<div>
			<div class="panel_lewy">
				<h2>Wykaz samochodów</h2>
				<?php
					$polaczenie = new mysqli('localhost', 'root','','komis');
					$plik = file("kwerendy.txt");
					$resultat = $polaczenie->query($plik[1]);
					echo"<ul>";
					while($wiersz = $resultat->fetch_array(MYSQLI_BOTH)){
						echo"<li>".$wiersz['id']." ".$wiersz['marka']." ".$wiersz['marka']."</li>";
					}
					echo"</ul>";
					mysqli_close($polaczenie);
				?>
				<h2>Zamówienia</h2>
				<?php
					$polaczenie = new mysqli('localhost', 'root','','komis');
					$plik = file("kwerendy.txt");
					$resultat = $polaczenie->query($plik[4]);
					echo"<ul>";
					while($wiersz = $resultat->fetch_array(MYSQLI_BOTH)){
						echo"<li>".$wiersz['Samochody_id']." ".$wiersz['Klient']."</li>";
					}
					echo"</ul>";
					mysqli_close($polaczenie);
				?>
			</div>
			
			<div class="panel_prawy">
				<h2>Pełne dane: Fiat</h2>
				<?php
					$polaczenie = new mysqli('localhost', 'root','','komis');
					$plik = file("kwerendy.txt");
					$resultat = $polaczenie->query($plik[7]);
					while($wiersz = $resultat->fetch_array(MYSQLI_BOTH)){
						echo $wiersz['id']." / ".$wiersz['marka']." / ".$wiersz['model']." / ".$wiersz['rocznik']." / ".$wiersz['kolor']." / ".$wiersz['stan']."<br>";
					}
					mysqli_close($polaczenie);
				?>
			</div>
		</div>
		
		<div class="stopka">
			<table>
				<tr>
					<td><p class="stopka"><a href="kwerendy.txt">Kwerendy</a></p></td>	<td><p class="stopka">Autor: PESEL</p></td> <td><p class="stopka"><img src="auto.png" alt="komis samochodowy"/></p></td>
				</tr>
			</table>
		</div>
	</body>
</html>