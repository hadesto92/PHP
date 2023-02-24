
<html>
	<head>
		<title>Komis samochodowy</title>
		<meta charset="utf-8" />
		<link rel="Stylesheet" type="text/css" href="auto.css" />
	</head>
	<body>
		<div id="kontener">
			<div id="header">
				<h1>Samochody</h1>
			</div>
			<div id="lewy">
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
			<div id="prawy">
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
			<div id="footer">
				<table>
					<tr>
						<td><a href="kwerendy.txt">Kwerendy</a></td>
						<td>Autor: PESEL</td>
						<td><img src="auto.png" alt="komis samochodowy"/></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>

