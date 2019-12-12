<?php
	require('sql.php');

	$conn = getConnection();

	if(array_key_exists("usernameinput", $_POST) && array_key_exists("passwordinput", $_POST)) {
		$username = $_POST["usernameinput"];
		$password = $_POST['passwordinput'];
		// $type = $_POST['type'];

		$sql = "SELECT userpassword FROM user WHERE username='".$username."';";
		$sqladmin = "SELECT admin FROM user WHERE username ='".$username."';";
		
		if ($resultadmin01 = $conn->query($sqladmin)) {
			$resultadmin02 = $resultadmin01->fetch_object();
			$admin = $resultadmin02->admin;
		}

		if ($result01 = $conn->query($sql)) {
			$result02 = $result01->fetch_object();
			$finalresult = $result02->userpassword;
		}

		mysqli_query(getConnection(), $sql);
		if(mysqli_error(GetConnection())){
			echo "SQL Fehler:".mysqli_error(getConnection());
		} else {
			if($finalresult == $password){
				if($admin == 'X'){
				?>
					<form id="autosubmitform1" action="./showadmin.php" method="POST">
						<input name="uname1" hidden value="<?php echo $username; ?>">
						<input name="pwd1" hidden value="<?php echo $password; ?>">
					</form>
					<script type="text/javascript" language="Javascript">
						document.getElementById("autosubmitform1").submit();
					</script>
				<?php
				} else{
				?>
					<form id="autosubmitform2" action="./showrestaurant.php" method="POST">
						<input name="uname2" hidden value="<?php echo $username; ?>">
						<input name="pwd2" hidden value="<?php echo $password; ?>">
					</form>
					<script type="text/javascript" language="Javascript">
						document.getElementById("autosubmitform2").submit();
					</script>
				<?php
				} 
			} else{
				?>
					<script type="text/javascript" language="Javascript"> 
						alert(unescape("Benutzername oder Passwort falsch%21 Bitte %FCberpr%FCfen Sie Ihre Eingaben."));
						history.go(-1);
					</script>
				<?php
			}
		}
	}
?>