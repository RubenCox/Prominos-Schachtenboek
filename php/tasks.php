<?php

// Connection with Azure Database		
function connect()
{
   require_once 'medoo.min.php';
 
	// Initialize
		$database = new medoo();
		return $database;
}

function addItem($name, $category, $date, $is_complete)
{
	$conn = connect();
	$sql = "INSERT INTO items (name, category, date, is_complete) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $category);
	$stmt->bindValue(3, $date);
	$stmt->bindValue(4, $is_complete);
	$stmt->execute();
}
// --- SCHACHTEN ---
function deleteSchacht($schacht_id)
{
	$database = connect();
	$database->delete("Schachten", [
	"AND" => [
		"SchachtID" => $schacht_id
	]
	]);
}
function editSchacht($schacht_id, $voornaam, $naam, $leeftijd, $studie, $petermeter)
{
	$database = connect();
	$database->update("Schachten", [
		 "Voornaam"=>$voornaam,
		 "Naam"=>$naam,
		 "Leeftijd"=>$leeftijd,
		 "Studie"=>$studie,
		 "Peter/Meter"=>$petermeter
		  ],
		  [
		"SchachtID"=>$schacht_id
		]);
}
function addSchacht($voornaam, $naam, $leeftijd, $studie, $geslacht)
{
	$database = connect();
	$database->insert("Schachten", [
		 "Voornaam"=>$voornaam,
		 "Naam"=>$naam,
		 "Leeftijd"=>$leeftijd,
		 "Studie"=>$studie,
		 "Geslacht"=>$geslacht
		]);
}

// --- EVENEMENTEN ---

function deleteEvenement($evenement_id)
{
	$database = connect();
	$database->delete("Evenementen", [
	"AND" => [
		"EvenementenID" => $evenement_id
	]
	]);
}
function editEvenement($evenement_id, $naam, $soort, $vanwie, $plaats, $omschrijving)
{
	$database = connect();
	$database->update("Evenementen", [
		 "Naam"=>$naam,
		 "Soort"=>$soort,
		 "VanWie"=>$vanwie,
		 "Plaats"=>$plaats,
		 "Omschrijving"=>$omschrijving
		  ],
		  [
		"EvenementenID"=>$evenement_id
		]);
}
function addEvenement($naam, $soort, $vanwie, $plaats, $omschrijving)
{
	$database = connect();
	$database->insert("Evenementen", [
		 "Naam"=>$naam,
		 "Soort"=>$soort,
		 "VanWie"=>$vanwie,
		 "Plaats"=>$plaats,
		 "Omschrijving"=>$omschrijving
		]);
}
// --- STRAFFEN ---

function deleteStraf($straf_id)
{
	$database = connect();
	$database->delete("Straffen", [
	"AND" => [
		"StrafID" => $straf_id
	]
	]);
}
function editStraf($straf_id, $naam, $omschrijving, $sterkte)
{
	$database = connect();
	$database->update("Straffen", [
		 "Naam"=>$naam,
		 "Omschrijving"=>$omschrijving,
		 "Sterkte"=>$sterkte
		  ],
		  [
		"StrafID"=>$straf_id
		]);
}
function addStraf($naam, $omschrijving, $sterkte)
{
	$database = connect();
	$database->insert("Straffen", [
		 "Naam"=>$naam,
		 "Omschrijving"=>$omschrijving,
		 "Sterkte"=>$sterkte
		]);
}

?>