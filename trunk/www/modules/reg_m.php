<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit Lark (x714 serveraion.ru)

if(isset($_POST['submit'])) {
	
	if(!empty($_POST['name']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])& !empty($_POST['mail']) && !empty($_POST['code'])) {
		$code = strtolower($_POST['code']);
 		if($code == $_SESSION['rand_code']) {
			$connect = @mysql_connect($dbhost,$dbuser,$dbpassword);
			if(!empty($_POST))
			{
				$name = $_POST["name"];
				$pass1 = $_POST["pass1"];
				$pass2 = $_POST["pass2"];
				$mail = trim($_POST["mail"]);
					
				if($pass1!=$pass2) {
						$reg_error = "Passwords do not match";
				} else if( !preg_match("/^([a-z0-9]([\-\_\.]*[a-z0-9])*)+@([a-z0-9]([\-]*[a-z0-9])*\.)+[a-z]{2,6}$/i", $mail) OR empty( $mail ) OR strlen( $mail ) > 50) {
						 $reg_error .= "Not correctly filled field E-Mail";
				} else{ 
					$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
					mysql_select_db($ls, $conn);
					mysql_query("set names 'utf8'"); 
					
					$name = trim(mysql_real_escape_string($_POST["name"]));
					$pass1 = trim(mysql_real_escape_string($_POST["pass1"]));
					$pass2 = trim(mysql_real_escape_string($_POST["pass2"]));
					
					$query = "SELECT `id`,`name` FROM `account_data` WHERE `name`='$name'";
					$res = mysql_query($query, $conn);
				if ($res) {
					if ($rs=mysql_fetch_array($res)) {
						if($rs[1]==$name){
							$reg_error = "Name busy";
							return;
						}
					}
				}
				$password = trim($pass1);
				$password = base64_encode(sha1($password, true));
				$query = "INSERT INTO `account_data` (`name`,`password`,`email`) VALUES ('$name','$password','$mail')";

				$res = mysql_query($query, $conn);
				$reg_success = "Welcome!".$name;
				mysql_close($conn);
				}
			}
		}
		else {
		
			$reg_error = "Verification code does not match";
		}
		
	}
	else {
		$reg_error = "Fill in all fields";
	}
}