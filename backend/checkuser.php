<?php
	require('sql.php');

	$conn = getConnection();

	if(array_key_exists("usernameinput", $_POST) && array_key_exists("passwordinput", $_POST)) {
		$sql = "SELECT userpassword FROM user WHERE username='".$_POST["usernameinput"]."';";

		if ($result01 = $conn->query($sql)) {
			$result02 = $result01->fetch_object();
			$finalresult = $result02->userpassword;
		}

		mysqli_query(getConnection(), $sql);
		if(mysqli_error(GetConnection())){
			echo "SQL Fehler:".mysqli_error(getConnection());
		}else{
			if($finalresult == $_POST['passwordinput']){
				header("Location: /backend/showreservation.php");
			}else{
				?>
					<script type="text/javascript" language="Javascript"> 
						alert(unescape("Benutzername oder Passwort falsch%21 Bitte %FCberpr%FCfen Sie Ihre Eingaben."));
						history.go(-1);
					</script>
				<?php
			}
		}
	} else {
		echo "Bitte f&uuml;llen Sie alle Felder aus!";
	}
	
?>