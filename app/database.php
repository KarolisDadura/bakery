<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kd_bakery";


function db2_connect()
{
	$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);
	
	if (!$conn)
	{
		die("Could not conect");
	}
	return $conn;
}

function db_query(string $query)
{
	$conn = db2_connect();
	$result = $conn->query ($query);
	$$conn->close();
	return $result
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



$conn->close();
