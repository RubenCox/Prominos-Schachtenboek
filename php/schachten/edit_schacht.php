<?php
	include_once '../tasks.php';

	$target_dir = "../../assets/img/Schachten/";
	$target_file = $target_dir . basename($_FILES["Schacht_Foto"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["Schacht_Foto"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	 // Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["Schacht_Foto"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["Schacht_Foto"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	
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