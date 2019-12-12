<?php
	require('sql.php');

	$name = $_POST["nameinput"];
	$email = $_POST["emailinput"];
	$restaurant = $_POST["restaurant"];
	$adress = $_POST["adressinput"];
	$request = $_POST["requestinput"];


	if($_POST["typeinput"] == 2){
		@$role = 'Restaurantbesitzer';
	} elseif ($_POST["typeinput"] == 1) {
		@$role = 'Kunde';
	} else {
		?>
			<script type="text/javascript" language="Javascript"> 
			alert(unescape("Bitte w%E4hlen Sie eine Rolle aus."));
			history.go(-1);
			</script>
		<?php
		exit;
	}
	
	if(array_key_exists("nameinput", $_POST) && array_key_exists("emailinput", $_POST) && array_key_exists("restaurant", $_POST) && array_key_exists("adressinput", $_POST) && array_key_exists("requestinput", $_POST)) {
		$sql = "INSERT INTO request (`role`, `reqname`, `email`, `restaurant`, `adress`, `request`) VALUES ('".@$role."', '".$name."', '".$email."', '".$restaurant."', '".$adress."', '".$request."');";
		mysqli_query(getConnection(), $sql);
		if(mysqli_error(getConnection())){
			echo "SQL Fehler:".mysqli_error(getConnection());
		}else{
			?>
			<body style="background-color: #7F6E64">
				<link href="../resources/css/stylesheet01.css" rel="stylesheet">
				<div align="center" valign="middle">
					<?php
						echo 'Ihr Anliegen wurde erfolgreich &uuml;bermittelt. Wir werden uns schnellstm&ouml;glich darum k&uuml;mmern.';
					?>
					<br>
					<br>
					<a type="button" class="button" href="../index.html">Home</a>
				</div>
			</body>
			<?php
		}
	} else {
		echo "Bitte f&uuml;llen Sie alle Felder aus!";
	}
?>