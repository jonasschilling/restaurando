<?php
	require('sql.php');
	
	if(array_key_exists("user", $_POST) && array_key_exists("typ", $_POST) && array_key_exists("pass", $_POST)) {
		if($_POST["typ"] == 'reg') {
			$sql = "INSERT INTO USER (`USER_NAME`, `BIO`, `PASS`) VALUES ('".$_POST["user"]."', '".$_POST["bio"]."', '".$_POST["pass"]."');";
			mysqli_query(getConnection(), $sql);
			if(mysqli_error(GetConnection())){
				echo "SQL Fehler:".mysqli_error(getConnection());
			}else{
				echo 'Registriert '.$_POST["user"].'!';
			}
		} else if($_POST["typ"] == 'log') {
			$sql = "SELECT * FROM USER WHERE `USER_NAME` = '".$_POST["user"]."' AND `pass` = '".$_POST["pass"]."';";
			mysqli_query(getConnection(), $sql);
			if(mysqli_error(GetConnection())){
				echo "SQL Fehler:".mysqli_error(getConnection());
			}else{
				$ret = mysqli_query(getConnection(), $sql);
				if(mysqli_num_rows($ret) > 0) {
					$row = mysqli_fetch_assoc($ret);
					echo 'Found user '.$_POST["user"].'!';
				} else {
					echo 'User not found!';
				}
			}
		}
	} else {
		echo "Params missing!";
	}
?>