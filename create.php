<?php

$new_data = ($_POST);

$required_fields =["date", "product_id", "initial","produced", "sold", "damaged","closed"];

$validData = true;

	foreach ($required_fields as $value) {
	if(!isset($new_data[$value]) || empty($new_data[$value]))
	{
		$validData = false;
		echo "Nerastas parametras: $value <br>";
	}
}

if (!$validData)
return;

@INCLUDE_ONCE('app/database.php');

	$query = "INSERT INTO `bakery_products_history` (
	`date`,
	`product_id`,
	`initial`,
	`produced`,
	`sold`,
	`damaged`,
	`closed`) VALUES (".
	$new_data["date"].",".
	$new_data["product_id"].",".
	$new_data["initial"].",".
	$new_data["produced"].",".
	$new_data["sold"].",".
	$new_data["damaged"].",".
	$new_data["closed"].")";

	die($query);

	$result = db_query($query);

print_r($result);

/*$existing_data = json_decode (file_get_contents("Data/bakery-data.json"));
$existing_data = objectToArray ($existing_data);

updateData($existing_data, $new_data);

file_put_contents("Data/bakery-data.json", json_encode($existing_data));

function objectToArray(stdClass $obj) : array 

{
	$obj = (array) $obj;
	foreach ($obj as $key => &$value) {

		if(gettype ($value) == "object")

		{
			$value = objectToArray ($value);
		}
	}

	return $obj;
}

function updateData(&$existing_data, $new_data)
{
	if (isset($existing_data [$new_data ["Data"]]))
	{
		
	
		if (isset($existing_data [$new_data ["Data"]][$new_data["Product"]]))
		{
			echo "toks produktas jau egzistuoja";
		}
		else
		{
			$existing_data =createNewProduct($existing_data, $new_data);
			echo "produktas sekmingai sukurtas\r\n";

		}
	}
	else
	{
		
		$existing_data[$new_data["Data"]]=[];
		$existing_data =createNewProduct($existing_data, $new_data);

	}

	
}

function createNewProduct ($existing_data, $new_data)
{
	$existing_data[$new_data["Data"]][$new_data["Product"]]= [
		(int) $new_data["VL"],
		(int) $new_data["PG"],
		(int) $new_data["PR"],
		(int) $new_data["SG"],
		(int) $new_data["GL"],
	];

	return $existing_data;
}

echo "<br> <a href=\"index.php\">grįžti į pradžią</a>";*/