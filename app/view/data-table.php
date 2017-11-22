<?php

$days = $keys = '';
$rows = [];


ksort($data);


$products= json_decode (file_get_contents("Data/products.json"), true);

				foreach ($data as $key => $value) {
					$days .= "<th colspan=\"5\">$key</th>";
					$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";

					foreach ($products as $key => $name) {
						
						if (!isset($rows[$key]))
						{
							$rows[$key] = "<td>$name</td>";
						}

						if(isset($value[$key])) 
						{
							foreach ($value[$key] as $amount) {
								$rows[$key] .= "<td>$amount</td>";
							}
						}

						else 
							$rows[$key] .= "<td></td><td></td><td></td><td></td><td></td>";
					
										
					/*foreach ($data as $amount) {

						$rows[$key] .= "<td>$amount</td>";	
					}*/
					}
				}


			//return;

			?>
<table>
	<thead>
		<tr>
			<th rowspan="2">Pavadinimas</th>
			<?php
				echo $days;	
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
				foreach ($rows as $row) {
					echo "<tr>" . $row ."<tr>";
				}

			?>
			
	</tbody>
</table>



<?php

