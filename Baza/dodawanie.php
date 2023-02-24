<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="Stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<p>Dodawanie rekordów do bazy MySQL</p>
	<form method="POST" action="">
		Imię:<input type="text" name="imie"/><br><br>
		Nazwisko:<input type="text" name="nazwisko"/><br><br>
		Email:<input type="text" name="email"/><br><br>
		Telefon:<input type="text" name="telefon"/><br><br>
		<input type="submit" value="Wyślij"/>
	</form>
	
	<?php
		//include ('bazy.php');
        
        $server = "mysql.cba.pl";
        $user = "karollach";
        $password = "Re20ki12n";
        $dbname = "karol_lach";
    
        $polaczenie = new mysqli($server, $user, $password, $dbname);
        
		if(isset($_POST['imie'])){
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$email = $_POST['email'];
			$telefon = $_POST['telefon'];
            
			$dodawanie = $polaczenie->query('INSERT INTO kontakty SET imie='.$imie.',nazwisko='.$nazwisko.',email='.$email.',telefon='.$telefon);
			header("location:widok.php");
        }
	?>
</body>
</html>