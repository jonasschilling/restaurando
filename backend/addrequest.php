<?php
	require('sql.php');
	console.log("Breakpoint0");
	
	if(array_key_exists("nameinput", $_POST) && array_key_exists("emailinput", $_POST) && array_key_exists("messageinput", $_POST)) {
		$sql = "INSERT INTO request (`name`, `email`, `request`) VALUES ('".$_POST["nameinput"]."', '".$_POST["emailinput"]."', '".$_POST["messageinput"]."');";
		mysqli_query(getConnection(), $sql);
		if(mysqli_error(getConnection())){
			?>
				console.log("Breakpoint1");
			<?php
			echo "SQL Fehler:".mysqli_error(getConnection());
		}else{
			?>
			<body style="background-color: #7F6E64">
				<link href="../css/stylesheet01.css" rel="stylesheet">
				<div align="center" valign="middle">
					<?php
						echo 'Ihr Anliegen wurde erfolgreich übermittelt.';
					?>
					<br>
					<br>
					<a type="button" class="button" href="../index.html">Home</a>
				</div>
			</body>
			console.log("Breakpoint2");
			<?php
		}
	} else {
		echo "Bitte füllen Sie alle Felder aus!";
	}
?>