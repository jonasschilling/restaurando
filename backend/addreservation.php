<?php
	require('sql.php');
	
	if(array_key_exists("nameinput", $_POST) && array_key_exists("dateinput", $_POST) && array_key_exists("timeinput", $_POST) && array_key_exists("amountinput", $_POST) && array_key_exists("restaurant", $_POST)){
		$sql = "INSERT INTO reservierung (`restaurant`, `resName`, `resDate`, `resTime`, `amountPers`) VALUES ('".$_POST["restaurant"]."', '".$_POST["nameinput"]."', '".$_POST["dateinput"]."', '".$_POST["timeinput"]."', '".$_POST["amountinput"]."');";
		mysqli_query(getConnection(), $sql);
		if(mysqli_error(GetConnection())){
			echo "SQL Fehler:".mysqli_error(getConnection());
		}else{
			?>
			<body style="background-color: #7F6E64">
				<link href="../css/stylesheet01.css" rel="stylesheet">
				<div align="center" valign="middle">
					<?php
						echo 'Ihre Reservierung bei '.$_POST["restaurant"].' auf den Namen '.$_POST["nameinput"].' am '.$_POST["dateinput"].' um '.$_POST["timeinput"].' Uhr wurde erfolgreich im System angelegt.';
					?>
					<br>
					<br>
					<a type="button" class="button" href="../index.html">Home</a>
				</div>
			</body>
			<?php
		}
	} else {
		echo "Bitte füllen Sie alle Felder aus!";
	}
?>