<?php
	require('sql.php');

	$checkusername = @$_POST['uname'];
	$checkpassword = @$_POST['pwd'];

	if(!isset($checkusername) OR !isset($checkpassword)) {
		?>
		<body style="background-color: #7F6E64">
				<script type="text/javascript" language="Javascript">
					alert(unescape("Sie sind nicht angemeldet."));
					history.go(-1);
				</script>
		</body>
		<?php
	} else {

		$conn = getConnection();

		$sql = "SELECT * FROM reservation";

		if ($result = $conn->query($sql)) {
			while ($singledata = $result->fetch_object()) {
				$data[] = $singledata;
			}
		}

		?>
			<body style="background-color: #7F6E64">
				<link href="../resources/css/stylesheet01.css" rel="stylesheet">
				<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:0;}
				.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				.tg .tg-il3a{color:#ffffff;border-color:#ffffff;text-align:left;vertical-align:top}
				</style>
				<a type="button" class="button" href="../index.html">Home</a>
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
									<?php echo date("H:i", strtotime($content->resTime)); ?>
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
					<a type="button" class="button" href="#">nach oben</a>
				</div>
			</body>
		<?php
		unset($checkusername);
		unset($checkpassword);
	}
?>