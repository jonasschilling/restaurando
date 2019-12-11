<?php
	require('sql.php');

	$conn = getConnection();

	if(array_key_exists("usernameinput", $_POST) && array_key_exists("passwordinput", $_POST)) {
		$username = $_POST["usernameinput"];
		$password = $_POST['passwordinput'];

		$sql = "SELECT userpassword FROM user WHERE username='".$username."';";
		
		if ($result01 = $conn->query($sql)) {
			$result02 = $result01->fetch_object();
			$finalresult = $result02->userpassword;
		}

		mysqli_query(getConnection(), $sql);
		if(mysqli_error(GetConnection())){
			echo "SQL Fehler:".mysqli_error(getConnection());
		}else{
			if($finalresult == $password){
				echo "breakpoint1";
				?>
					<form id="autosubmitform" action="./showadmin.php" method="POST">
						<input name="uname" hidden value="<?php echo $username; ?>">
						<input name="pwd" hidden value="<?php echo $password; ?>">
					</form>
					<script type="text/javascript" language="Javascript">
						document.getElementById("autosubmitform").submit();
					</script>
				<?php

				// header("Location: /backend/showreservation.php");
				
				?>
					
				<?php
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