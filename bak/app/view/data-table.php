<?php

$rows = $days = [];
$keys = '';

foreach ($products as $value) 
{
	
	if (!isset($rows[$value['id']]))
	{
		$rows[$value['id']] = [];
		$rows[$value['id']]['name'] = '<td>' . $value ['name'] . '</td>';
	}
}


foreach ($productHistory as $value) 
{

	if (!isset($days[$value['date']]))
	{
		$days[$value['date']] = $value['date'];
		$keys .= '<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>';

		foreach ($rows as &$product) 
		{
			$product[$value['date']] = '<td></td><td></td><td></td><td></td><td></td>';
		}
	}

	$rows[$value['product_id']][$value ['date']] = '<td>' . $value['initial'] . '</td><td>' . $value['produced'] . '</td><td>' . $value['sold'] . '</td><td>' . $value['damaged'] . '</td><td>' . $value['closed'] . '</td>';

	/*print_r($value);
	print_r($rows);
	die();*/



	/*$product[$value['id']] .= '<td>' . $value['initial'] . '</td>';
	$product[$value['id']] .= '<td>' . $value['produced'] . '</td>';
	$product[$value['id']] .= '<td>' . $value['sold'] . '</td>';
	$product[$value['id']] .= '<td>' . $value['damaged'] . '</td>';
	$product[$value['id']] .= '<td>' . $value['closed'] . '</td>';*/

				

	





	/*if (!isset($rows[$value['product_id']]))
				{
					$rows[$value['product_id']] = '<td>' . $name['product_id'] . '</td>';
				}*/



		
	/*foreach ($products as $key => $name) 
	{
		
		if (!isset($rows[$key]))
			{
				$rows[$key] = "<td>$name</td>";
			}

		if(isset($value[$key])) 
		{
			foreach ($value[$key] as $amount) 
			{
				$rows[$key] .= "<td>$amount</td>";
			}
		}

		else 
			$rows[$key] .= "<td></td><td></td><td></td><td></td><td></td>";
	
						
		foreach ($data as $amount) {

		$rows[$key] .= "<td>$amount</td>";	
	}
	}*/
}



?>
<table>
	<thead>
		<tr>
			<th rowspan="2">Pavadinimas</th>
			<?php
				foreach ($days as $date) {
					echo  '<th colspan=5>' . $date . '</th>' ;
				}
			?>
		</tr>
		<tr>
			<?php
				echo $keys;
			?>
		</tr>	
	</thead>
	<tbody>

		<?php

			foreach ($rows as $data){
				echo '<tr>';
				
				foreach ($data as $key => $value){ 
					echo $value;
				}
					echo '<tr>';
				
			}

		?>
			
	</tbody>
</table>



<?php

