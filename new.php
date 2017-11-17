<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body style="text-align: center;">

	<form method="POST" action="create.php">
		<div> Data :<div/> 
			<input type="Date" name="Data"> <br>

		<div>Prekė :</div>
		<select name="product">
			<option value="1">Aguoninė</option>
			<option value="2">Varškės</option>
		</select>
			
		<div> vakarykštis likutis: <div/> 
			<input type="number" name="VL"> <br>
		<div> pagaminta:<div/> 
			<input type="number" name="PG"> <br>
		<div> parduota:<div/> 
			<input type="number" name="PR"> <br>
		<div> sugadinta:<div/> 
			<input type="number" name="SG"> <br>
		<div> galutinis likutis:<div/> 
			<input type="number" name="GL"> <br>

		<input type="submit" value="Išsaugoti duomenis">

	</form>
</body>
</html>