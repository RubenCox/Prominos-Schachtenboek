<?php
	include_once '../tasks.php';

	$naam = $_POST['Evenement_Naam'];
	$soort = $_POST['Evenement_Soort'];
	$vanwie = $_POST['Evenement_VanWie'];
	$plaats = $_POST['Evenement_Plaats'];
	$omschrijving = $_POST['Evenement_Omschrijving'];
	
	addEvenement($naam, $soort, $vanwie, $plaats, $omschrijving);

	header('Location: ../../evenementen.php?add=0');
?>