<html>
    <head>
		<title>Pobieranie danych z formularza PHP</title>
        <meta charset="utf-8">
	</head>
	<body>
        <h1>METODA GET</h1>
        <br>
		<form method="get" action="skrypt.php">
            Podaj swoje imie: <input type="text" name="pole1"/><br>
            Podaj swoje nazwisko: <input type="text" name="pole2"/><br>
            <input type="submit" value="Wyslij"/>
        </form>
        <br><br>
        <h1>METODA POST</h1>
        <br>
        <form method="post" action="skrypt.php">
            Podaj swoje imie: <input type="text" name="pole1"/><br>
            Podaj swoje nazwisko: <input type="text" name="pole2"/><br>
            <input type="submit" value="Wyslij"/>
        </form>
	</body>
</html>