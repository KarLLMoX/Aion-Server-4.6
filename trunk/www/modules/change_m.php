<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)

if(isset($_POST['submit'])) {
	$UserName = trim(mysql_escape_string($_POST["name"])); 
	$PassAc = trim(mysql_escape_string($_POST['old_pass'])); 
	$NewPassAc = trim(mysql_escape_string($_POST['new_pass1'])); 
	$NewPassAc1 = trim(mysql_escape_string($_POST['new_pass2'])); 
	$OldPassAc = base64_encode(sha1($PassAc, true));
	$NewPass = base64_encode(sha1($NewPassAc, true));

	if ($NewPassAc != $NewPassAc1) {
		$change_error = "New passwords do not match";
	}

	else {
	$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
	mysql_select_db($ls);
	mysql_query("SET NAMES 'utf8'");
	$query = "SELECT name, password FROM account_data WHERE name = '$UserName' AND password = '$OldPassAc'";
	$result = mysql_query($query);

		if (mysql_num_rows($result)) {
			$NewPass = mysql_query("UPDATE `account_data` SET `password` = '$NewPass' WHERE name = '$UserName'");
			$change_success = "Password successfully changed";
			if ($_SESSION['login_name'] == $UserName) {
			//header("Location: logout.php");
			echo "<script language='JavaScript'>alert('Password changed. Sign in again using the new Password'); window.location.href = 'logout.php'; </script>";
			}
		}
		else {
			$change_error = "The input data does not match";
		}
	}
}