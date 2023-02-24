<?php
    include ('bazy.php');
	
	if(isset($_GET['id'])){
		$edit = $_GET['id'];
		$zamiana = $polaczenie->query("SELECT * FROM kontakty WHERE id='$edit'");
		if($zamiana->num_rows>0){
			$wiersz = $zamiana->fetch_object();
			echo '<form method="POST" action="">';
			echo 'Imię:<input type="text" name="imie" value='.$wiersz->imie.'></input><br><br>';
			echo 'Nazwisko:<input type="text" name="nazwisko" value='.$wiersz->nazwisko.'></input><br><br>';
			echo 'Email:<input type="text" name="email" value='.$wiersz->email.'></input><br><br>';
			echo 'Telefon:<input type="text" name="telefon" value='.$wiersz->telefon.'></input><br><br>';
			echo '<input type="submit" value="Wyślij"/>';
			echo '</form>';
		}
		
	}
	else{
		header("location:widok.php");
    }
		
	if(isset($_POST['imie'])){
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$email = $_POST['email'];
		$telefon = $_POST['telefon'];
		$aktualizacja = $polaczenie->query("UPDATE kontakty SET imie='$imie',nazwisko='$nazwisko',email='$email',telefon='$telefon' WHERE id='$edit'");
        
		header("location:widok.php");
    }
?>