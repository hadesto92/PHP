<html>
	<head>
		<title>Champions</title>
	</head>
	<body>
		<?php
			@$imie = $_POST['imie'];
			@$nazwisko = $_POST['nazwisko'];
			@$wiek = $_POST['wiek'];
			
			echo("Twoje imie to $imie a nazwisko $nazwisko natomiast wiek masz tak stary jak $wiek lat");
		?>
	</body>
</html>