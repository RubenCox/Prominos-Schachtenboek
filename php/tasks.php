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

?>