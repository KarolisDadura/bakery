<?php

function db_connect()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kd_bakery";
	$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);
	
	if (!$conn)
	{
		die("Could not connect");
	}

	$conn->set_charset('utf8mb4');
	return $conn;
}

function db_query(string $query)
{
	$conn = db_connect();
	$result = $conn->query ($query);

	if($result)
	{
		$conn->close();
		return $result;
	}
	print_r($conn);
	$conn->close();

die();

}

function db_insertQuery(string $tablename, array $data, bool $uuid = false) : string
{
	if ($uuid)
		$data['id'] = uniqid ();


	$keys = $values ='';

	foreach ($data as $key =>$value) {
		$keys .= "`$key`,";
		$values .="'$value',";
	}
$keys = rtrim($keys, ",");
$values = rtrim($values, ",");


$query = "INSERT INTO `$tablename` ($keys) VALUES ($values)";

return ($query);
}

