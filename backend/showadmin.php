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

		$sqlres = "SELECT * FROM reservation WHERE resDate >= CurDate() ORDER BY resDate asc";
		$sqlreqrest = "SELECT reqname, email, restaurant, adress, request FROM request WHERE role='Restaurantbesitzer'";
		$sqlreqcust = "SELECT reqname, email, request FROM request WHERE role='Kunde'";

		if ($resultres = $conn->query($sqlres)) {
			while ($singledatares = $resultres->fetch_object()) {
				$datares[] = $singledatares;
			}
		}

		if ($resultreqrest = $conn->query($sqlreqrest)) {
			while ($singledatareqrest = $resultreqrest->fetch_object()) {
				$datareqrest[] = $singledatareqrest;
			}
		}

		if ($resultreqcust = $conn->query($sqlreqcust)) {
			while ($singledatareqcust = $resultreqcust->fetch_object()) {
				$datareqcust[] = $singledatareqcust;
			}
		}

		?>
			<body style="background-color: #7F6E64">	
				<link href="../resources/css/stylesheet01.css" rel="stylesheet">
				<a type="button" class="button" href="../index.html">Home</a>
				<div align="center">
					<h1 style="color:#ffffff;">Admin-Sicht</h1>
					<h5 style="color:#ffffff;">Hier k&ouml;nnen alle Reservierungen und Anfragen eingesehen werden.</h5>
				</div>
				<div align="center">
					<a type="button" class="button" href="#reservation">Reservierungen</a>
					<a type="button" class="button" href="#requestrest">Restaurant-Anfragen</a>
					<a type="button" class="button" href="#requestcust">Kunden-Anfragen</a>
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
						<h2 style="color:#ffffff;">Alle Reservierungen</h2>
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
							foreach ($datares as $contentres){
							?>
								<tr>
									<td class="tg-il3a">
										<?php echo $contentres->resNumber; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentres->restaurant; ?>
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

				<div id="requestrest">
					<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg .tg-il3a{color:#ffffff;border-color:#ffffff;text-align:left;vertical-align:top}
					</style>
					<div align="center">
						<h2 style="color:#ffffff;">Restaurant-Anfragen</h2>
						<br>
						<table class="tg">
							<thead>
								<tr>
									<th class="tg-il3a">Name</th>
									<th class="tg-il3a">Email</th>
									<th class="tg-il3a">Restaurant</th>
									<th class="tg-il3a">Adresse</th>
									<th class="tg-il3a">Anfrage</th>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach ($datareqrest as $contentreqrest){
							?>
								<tr>
									<td class="tg-il3a">
										<?php echo $contentreqrest->reqname; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentreqrest->email; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentreqrest->restaurant; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentreqrest->adress; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentreqrest->request; ?>
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

				<div id="requestcust">
					<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg .tg-il3a{color:#ffffff;border-color:#ffffff;text-align:left;vertical-align:top}
					</style>
					<div align="center">
						<h2 style="color:#ffffff;">Kunden-Anfragen</h2>
						<br>
						<table class="tg">
							<thead>
								<tr>
									<th class="tg-il3a">Name</th>
									<th class="tg-il3a">Email</th>
									<th class="tg-il3a">Anfrage</th>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach ($datareqcust as $contentreqcust){
							?>
								<tr>
									<td class="tg-il3a">
										<?php echo $contentreqcust->reqname; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentreqcust->email; ?>
									</td>
									<td class="tg-il3a">
										<?php echo $contentreqcust->request; ?>
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
				</div>
			</body>
		<?php
		unset($checkusername);
		unset($checkpassword);
	}
?>