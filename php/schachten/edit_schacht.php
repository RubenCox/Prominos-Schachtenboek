<?php
	include_once '../tasks.php';

	$id = $_GET['id'];
	$voornaam = $_POST['Schacht_Voornaam'];
	$naam = $_POST['Schacht_Naam'];
	$leeftijd = $_POST['Schacht_Leeftijd'];
	$studie = $_POST['Schacht_Studie'];
	$geslacht = $_POST['Schacht_Geslacht'];
	$foto = $_POST['Schacht_Foto'];
	$petermeter = $_POST['Schacht_Peter'];
	
	editSchacht($id, $voornaam, $naam, $leeftijd, $studie, $geslacht, $foto, $petermeter);

	header('Location: ../../schachten.php?edit=0');
?>