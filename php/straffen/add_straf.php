<?php
	include_once '../tasks.php';

	$naam = $_POST['Straf_Naam'];
	$omschrijving = $_POST['Straf_Omschrijving'];
	$sterkte = $_POST['Straf_Sterkte'];
	
	addStraf($naam, $omschrijving, $sterkte);

	header('Location: ../../straffen.php?add=0');
?>