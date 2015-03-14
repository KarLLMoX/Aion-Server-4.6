<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit Lark (x714 serveraion.ru)

if(isset($_POST['submit'])) {
	$Name = trim(mysql_escape_string($_POST["name"])); 
	$mail = trim($_POST['mail']); 
	if ($Name == NULL || $mail == NULL) {
		$error = "Fill in all fields";
	}
	else {
	$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
	mysql_select_db($ls);
	mysql_query("SET NAMES 'utf8'");
	$query = "SELECT id FROM account_data WHERE name = '$Name' AND email = '$mail'";
	$result = mysql_query($query);
		if (mysql_num_rows($result)) {
			$newpassword = uniqid("");
			$mail_text = "Ð—Ð´Ñ€Ð°Ð²ÑÑ‚Ð²ÑƒÐ¹Ñ‚Ðµ $Name\nÐšÑ‚Ð¾ Ñ‚Ð¾ (Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð’Ñ‹) Ð¿Ð¾Ð¿Ñ‹Ñ‚Ð°Ð»ÑÑ Ð¸Ð·Ð¼ÐµÐ½Ð¸Ñ‚ÑŒ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ Ð´Ð»Ñ Ð²Ñ…Ð¾Ð´Ð° Ð² Ð›Ðš\n\nÐ’Ð°Ñˆ Ð½Ð¾Ð²Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ: $newpassword\n\nÐ¡ ÑƒÐ²Ð°Ð¶ÐµÐ½Ð¸ÐµÐ¼ ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ñ ÐŸÑ€Ð¾ÐµÐºÑ‚Ð°!";
			mail("$mail", "Password Reset", "$mail_text"); 
			$newpassword = base64_encode(sha1($newpassword, true));
			mysql_query("UPDATE `account_data` SET `password` = '$newpassword' WHERE name = '$Name'");
			$success = "Your mailbox has been sent a new password.";
		}
		else {
			$error = "The input data does not match";
		}
	mysql_select_db($ls);
	mysql_query("SET NAMES 'utf8'");
	}
}