<?php
/** * Copyright 2013 Microsoft Corporation 
	*  
	* Licensed under the Apache License, Version 2.0 (the "License"); 
	* you may not use this file except in compliance with the License. 
	* You may obtain a copy of the License at 
	* http://www.apache.org/licenses/LICENSE-2.0 
	*  
	* Unless required by applicable law or agreed to in writing, software 
	* distributed under the License is distributed on an "AS IS" BASIS, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
	* See the License for the specific language governing permissions and 
	* limitations under the License. 
	*/
		
function connect()
{
   require_once 'medoo.min.php';
 
	// Initialize
	$database = new medoo([
		'database_type' => 'mssql',
		'database_name' => 'Prominos_SchachtenBoek',
		'server' => 'ht7gjct2fd.database.windows.net,1433',
		'username' => 'MySQLAdmin',
		'password' => 'Coxie9237',
		'charset' => 'utf8'
	]);
	
	echo "PHP MEDOO COMPLETED";
	
	$datas = $database->select("Opdrachten", [
		"Omschrijving"
		
	], [
		"OpdrachtenID[=]" => 1
	]);
	echo "PHP MEDOO SELECT COMPLETED";
	foreach($datas as $data)
{
	echo "<br/>" . "Omschrijving: " . $data["Omschrijving"] . "<br/>";
}

}

function markItemComplete($item_id)
{
	$conn = connect();
	$sql = "UPDATE items SET is_complete = 1 WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $item_id);
	$stmt->execute();
}

function getAllItems()
{
	$conn = connect();
	$sql = "SELECT * FROM dbo.Schachtenmeesters";
	$stmt = $conn->sqlsrv_query($conn, $sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
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

function deleteItem($item_id)
{
	$conn = connect();
	$sql = "DELETE FROM items WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $item_id);
	$stmt->execute();
}

?>