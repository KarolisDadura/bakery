<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body style="text-align: center;">

	<form method="POST" action="create.php">
		<div> Data :<div/> 
			<input type="date" name="date"> <br>

		<div>Prekė:</div>
		<select name="product_id">
			<?php  

				@INCLUDE_ONCE('app/database.php');
				$query = "SELECT `id`,`name` FROM `bakery_products` WHERE `deleted_at` IS NULL ORDER BY `name` ASC ";

				$result = db_query($query);

				foreach ($result as $value) 
				{
					echo '<option value="' . $value['id'] . '">' . $value ['name'] . '</option>';
				}
			?>
		</select>
			
		<div> vakarykštis likutis: <div/> 
			<input type="number" name="initial"> <br>
		<div> pagaminta:<div/> 
			<input type="number" name="produced"> <br>
		<div> parduota:<div/> 
			<input type="number" name="sold"> <br>
		<div> sugadinta:<div/> 
			<input type="number" name="damaged"> <br>
		<div> galutinis likutis:<div/> 
			<input type="number" name="closed"> <br>

		<input type="submit" value="Išsaugoti duomenis">

	</form> <br>

	<a href="index.php">grįžti į pradžią</a>

</body>
</html>