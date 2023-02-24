<html>
	<head>
		<title>Champions</title>
	</head>
	<body>
		<form method='post'>
			Podaj liczbę powtórzeń pętli: <input type='text' name ='a'><br>
			<input type="checkbox" name="mailing" value="checked">Pętla w górę (nie znaznaczenie spowoduję pętlę w dół).
			<input type='submit' value='wyslij'>
		</form>
		
		<br><br><br>
		
		<?php
			
			@$a = $_POST['a'];
			
			if(isset($_POST["mailing"])){
				for($b=1;$b<=$a;$b++){
					print("$b <br>");
				}
			}
			else{
				for($b=$a;$b>=0;$b--){
					print("$b <br>");
				}
			}
			
		?>
	</body>
</html>