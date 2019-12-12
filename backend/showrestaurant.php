<?php
	require('sql.php');

	$checkrestname = @$_POST['uname2'];
	$checkpassword = @$_POST['pwd2'];


	if(!isset($checkrestname) OR !isset($checkpassword)) {
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

		$sqlres = "SELECT * FROM reservation WHERE resDate >= CurDate() AND restaurant = '$checkrestname'";
		$sqlrescount = "SELECT COUNT(*) as amountRes FROM reservation WHERE resDate >= CurDate() AND restaurant = '$checkrestname'";

		if ($resultres = $conn->query($sqlres)) {
			while ($singledatares = $resultres->fetch_object()) {
				$datares[] = $singledatares;
			}
		}

		if ($resultcount = $conn->query($sqlrescount)) {
			$result = $resultcount->fetch_object();
		}

		?>
			<body style="background-color: #7F6E64">	
				<link href="../resources/css/stylesheet01.css" rel="stylesheet">
				<a type="button" class="button" href="../index.html">Home</a>
				<div align="center">
					<h1 style="color:#ffffff;">Restaurantbesitzer-Sicht</h1>
					<h5 style="color:#ffffff;">Hier k&ouml;nnen alle Reservierungen eingesehen werden.</h5>
				</div>
				<br>
				<div id="reservation">
					<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg .tg-il3a{color:#ffffff;border-color:#ffffff;text-align:left;vertical-align:top}
					</style>
					<div align="center">
						<h2 style="color:#ffffff;">Reservierungen f&uuml;r <?php echo $checkrestname." "?>(<?php echo $result->amountRes?>)</h2>
						<br>
						<table class="tg">
							<thead>
								<tr>
									<th class="tg-il3a">ResNr</th>
									<th class="tg-il3a">Name</th>
									<th class="tg-il3a">Datum</th>
									<th class="tg-il3a">Uhrzeit</th>
									<th class="tg-il3a">Anzahl Personen</th>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach ($datares as $contentres){
							?>
								<tr>
									<td class="tg-il3a">
										<?php echo $contentres->resNumber; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentres->resName; ?>
									</td>
									<td class="tg-il3a">
										<?php echo date("d.m.Y", strtotime($contentres->resDate)); ?>
									</td>
									<td class="tg-il3a">
										<?php echo date("H:i", strtotime($contentres->resTime)); ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentres->amountPers; ?>
									</td>      
								</tr>
							<?php
							}
							?>
							</tbody>
						</table>
						<span style='font-size:9px;'/>
						<br>
					</div>
				</div>
			</body>
		<?php
		unset($checkrestname);
		unset($checkpassword);
	}
?>