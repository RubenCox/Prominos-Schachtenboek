<?php
	include_once '../tasks.php';

	$id = $_GET['id'];
	$naam = $_POST['Straf_Naam'];
	$omschrijving = $_POST['Straf_Omschrijving'];
	$sterkte = $_POST['Straf_Sterkte'];
	
	editStraf($id, $naam, $omschrijving, $sterkte);

	header('Location: ../../straffen.php?edit=0');
?>