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
	$conn->close();
	return $result;
}

/*$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);

if (!$conn)
{
	die("Could not conect");
}

$result = $conn->query("SHOW TABLES");

foreach ($result as $key => $value) {
	
	print_r ($key);

	print_r($value);
}



$conn->close();*/
