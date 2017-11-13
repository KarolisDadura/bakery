<!DOCTYPE html>
<html>
<head>
	<title>Autoįvykių_suvestinė</title>
	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>

<table border>
	<thead>
		<tr>
		<th rowspan="2">Pavadinimas</th>
		<th colspan="5">2017-11-12</th>
		<th colspan="5">2017-11-13</th>
		</tr>
		<tr>
		<th>VL</th> <!-- Vakrykštis likutis-->
		<th>PG</th> <!-- Pagaminta-->
		<th>PR</th> <!-- Parduota-->
		<th>SG</th> <!-- Sugadinta-->
		<th>GL</th> <!-- Galutinis likutis-->
		<th>VL</th> <!-- Vakrykštis likutis-->
		<th>PG</th> <!-- Pagaminta-->
		<th>PR</th> <!-- Parduota-->
		<th>SG</th> <!-- Sugadinta-->
		<th>GL</th> <!-- Galutinis likutis-->

		Pasidaryti duomenų masyvus Autoįvykių suvestinei.
- Įvykis
- Data
- Adresas
- Dalyviai

- Dalyvių tipai:
- Mašina
- Dviratis
- Pestysis
	
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>aguoninė</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>

		</tr>
		<tr>
			<td>varškės</td>
			<td>3</td>
			<td>28</td>
			<td>25</td>
			<td>2</td>
			<td>4</td>
			<td>3</td>
			<td>28</td>
			<td>25</td>
			<td>2</td>
			<td>4</td>
		</tr>	
		<tr>
			<td>duona balta</td>
			<td>1</td>
			<td>17</td>
			<td>15</td>
			<td>0</td>
			<td>3</td>
			<td>1</td>
			<td>17</td>
			<td>15</td>
			<td>0</td>
			<td>3</td>
		</tr>	
		<tr>
			<td>duona juoda</td>
			<td>0</td>
			<td>50</td>
			<td>50</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>50</td>
			<td>50</td>
			<td>0</td>
			<td>0</td>
		</tr>
		<tr>
			<td>duona ruginė</td>
			<td>2</td>
			<td>18</td>
			<td>16</td>
			<td>2</td>
			<td>2</td>
			<td>2</td>
			<td>18</td>
			<td>16</td>
			<td>2</td>
			<td>2</td>
		</tr>	
	<script type="text/javascript">

		var Pavadinimas = ["aguoninė", "varškės", "duona balta", "duona juoda", "duona balta", "duona ruginė"];
		
		// Option I - unsorted

		var _arrayofObjects = [
			{
				"date": "2017-11-09",
				"product": "aguoninė",
				"data:": [5,20,19,4,2],
			}
		// Option II - sort by date

		var _objectByDay = {
			"2017-11-09":
			[
				{
					"date": "2017-11-09",
					"product": "aguoninė",
					"data:": [5,20,19,4,2],
				}

		// Option III - objects by product
			var _ObjectsByProduct = {
				"varškės":
				[
				{
					"date": "2017-11-09",
					"data:": [3,28,25,2,4]
				},
				{
					"date": "2017-11-10",
					"data:": [3,28,25,2,4]
				}
				],
				"aguoninė":
				[
				{
					"date": "2017-11-09",
					"data:": [5,20,19,4,2],
				},
				{
					"date": "2017-11-10",
					"data:": [5,20,19,4,2],
				},
				],

		// Option IV - optimized by date
		var _optimizedByDate = {
			"2017-11-09":
				{
					"varškės": [3,28,25,2,4],
					"aguoninė": [5,20,19,4,2],
				},
			
			
		// Option V - optimized by product
		var _optimizedByProduct = {
			"varškės":
				{
					"2017-11-09": [3,28,25,2,4],
					"2017-11-10": [5,20,19,4,2],
				},
		// Option final

		var _products = 
		{
			"p-1": "varškės",
			"p-2": "aguoninė",
		},

			
	</script>	
			
	</tbody>

</table>	

</body>
</html>