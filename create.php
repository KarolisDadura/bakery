<?php

$new_data = ($_POST);

$existing_data = json_decode (file_get_contents("Data/bakery-data.json"));
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
		echo "yes";
	
		if (isset($existing_data [$new_data ["Data"]][$new_data["Product"]]))
		{
			echo "error";
		}
		else
		{
			echo "create Product\r\n";
		}
	}
	else
	{
		
		$existing_data[$new_data["Data"]]=[];
		$existing_data =createNewProduct($existing_data, $new_data);

	}

	print_r($existing_data);
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

