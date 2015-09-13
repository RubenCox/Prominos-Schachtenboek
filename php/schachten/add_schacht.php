<?php
	include_once '../tasks.php';

	$voornaam = $_POST['Schacht_Voornaam'];
	$naam = $_POST['Schacht_Naam'];
	$leeftijd = $_POST['Schacht_Leeftijd'];
	$studie = $_POST['Schacht_Studie'];
	$geslacht = $_POST['Schacht_Geslacht'];
	
	addSchacht($voornaam, $naam, $leeftijd, $studie, $geslacht);

	header('Location: ../../schachten.php?add=0');
?>