<?php
	require('sql.php');

	$conn = getConnection();

	$sql = "SELECT * FROM reservierung";

	if ($result = $conn->query($sql)) {
		while ($singledata = $result->fetch_object()) {
			$data[] = $singledata;
		}
	}

?>
	<body style="background-color: #7F6E64">
		<link href="../css/stylesheet01.css" rel="stylesheet">
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg .tg-il3a{color:#ffffff;border-color:#ffffff;text-align:left;vertical-align:top}
		</style>
		<div align="center">
			<h1 style="color:#ffffff;">Alle Reservierungen</h1>
			<br>
			<table class="tg">
				<thead>
					<tr>
						<th class="tg-il3a">ResNr</th>
						<th class="tg-il3a">Restaurant</th>
						<th class="tg-il3a">Name</th>
						<th class="tg-il3a">Datum</th>
						<th class="tg-il3a">Uhrzeit</th>
						<th class="tg-il3a">Anzahl Personen</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach ($data as $content){
				?>
					<tr>
						<td class="tg-il3a">
							<?php echo $content->resNumber; ?>
						</td>
						<td class="tg-il3a">
							<?php echo $content->restaurant; ?>
						</td>
						<td class="tg-il3a">
							<?php echo $content->resName; ?>
						</td>
						<td class="tg-il3a">
							<?php echo date("d.m.Y", strtotime($content->resDate)); ?>
						</td>
						<td class="tg-il3a">
							<?php echo $content->resTime; ?>
						</td>
						<td class="tg-il3a">
							<?php echo $content->amountPers; ?>
						</td>      
					</tr>
				<?php
				}
				?>
				</tbody>
			</table>
			<span style='font-size:9px;'/>
			<br>
			<a type="button" class="button" href="../index.html"><< zurück</a>
		</div>
	</body>
	<?php
	
?>