<?php
	include_once '../tasks.php';

	$voornaam = $_POST['Schacht_Voornaam'];
	$naam = $_POST['Schacht_Naam'];
	$leeftijd = $_POST['Schacht_Leeftijd'];
	$studie = $_POST['Schacht_Studie'];
	$petermeter = $_POST['Schacht_Peter'];
	
	addSchacht($voornaam, $naam, $leeftijd, $studie, $petermeter);

	header('Location: ../../schachten.php?add=0');
?>