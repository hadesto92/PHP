<html>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
	<head>
		<title>Champions</title>
	</head>
	
	<body>
	
		
	
		<form method='post'>
			Podaj liczbę podsieci: <input type='text' name ='p'>
			
			<input type='submit' value='wyslij'>
		</form>
		
		<br><br>
		
		
		<?php
			
			function dodawanie($a,$b){
				
				$c = $a+$b;
				
				return($c);
			}
			
			@$p = $_POST['p'];
			
			
			echo '<table border="1">';
			echo '<tr>';
				echo'<td>Adres podsieci</td> <td>Maska podsieci</td> <td><a href="http://www.onet.pl">Adres rozgłoszeniowy</a></td> <td>Adresy host</td> <td>Liczba host</td>';
			echo '</tr>';
			for ($a = 1; $a <= $p; $a++){
				
				$h = dodawanie($a, $p);
				
				echo'<tr>';
					echo"<td> $a, $p, $h </td> <td> $a </td> <td> $a </td> <td><a href='http://www.onet.pl'> $a </a></td> <td> $a </td>";
				echo'</tr>';
				
			}
			
			echo '</table>';
		?>

	</body>
</html>