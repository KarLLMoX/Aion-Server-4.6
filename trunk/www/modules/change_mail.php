<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit Lark (x714 serveraion.ru)

if(isset($_POST['submit'])) {
	$UserName = trim(mysql_escape_string($_POST["name"])); 
	$old_mail = trim($_POST['old_mail']); 
	$New_mail = trim($_POST['new_mail']); 

	if ($old_mail == $New_mail) {
		$change_error = "New e-mail coincides with old.";
	}
	else if( !preg_match("/^([a-z0-9]([\-\_\.]*[a-z0-9])*)+@([a-z0-9]([\-]*[a-z0-9])*\.)+[a-z]{2,6}$/i", $New_mail) OR empty( $New_mail ) OR strlen( $New_mail ) > 50) {
		$change_error = "Field filled not right E-Mail";
	}
	else {
	$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
	mysql_select_db($ls);
	mysql_query("SET NAMES 'utf8'");
	$query = "SELECT name, email FROM account_data WHERE name = '$UserName' AND email = '$old_mail'";
	$result = mysql_query($query);
		if (mysql_num_rows($result)) {
			$NewPass = mysql_query("UPDATE `account_data` SET `email` = '$New_mail' WHERE name = '$UserName'");
			$change_success = "E-Mail successfully changed";
		}
		else {
			$change_error = "User not found $UserName with the mailbox.";
		}
	}
}