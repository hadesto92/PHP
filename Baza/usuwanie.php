<?php
    include ('bazy.php');
	
	if(isset($_GET['id'])){
		$delete = $_GET['id'];
		$kasowanie = $polaczenie->query("DELETE FROM kontakty WHERE id='$delete'");
		header("location:widok.php");
    }
		
?>