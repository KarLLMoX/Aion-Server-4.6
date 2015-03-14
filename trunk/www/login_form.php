<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit Lark (x714 serveraion.ru)

if (!isset($_SESSION['id'])) {
	echo "
	<table width='100%' height='100%'>
	<form method='POST' action=\"".$_SERVER['PHP_SELF']."\">
	<table>
	<tr><td>
	<table>
	<tr>
		<td>Login:</td>
		<td><input type='text' name='name' size='15'></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type='password' name='password' size='15'></td>
	</tr>
	</table>
	</td></tr>
	<tr>
		<td align=center>
			<input type='submit' name='enter' class='button-submit dark-shadow' value='Submit'>
			<button type='button' class='button-submit dark-shadow' ONCLICK='lost()'>Forgot Password</button>
			<script>function lost(){location.href='lostpassword.php';}</script>
		</td>
	</tr>
	</table>
	</form>";
	if (isset($_POST['enter'])) {
		$name = trim($_POST["name"]);
		$password = trim($_POST["password"]);
		$password = base64_encode(sha1($password, true));
		
		if (!empty($_POST['name']) && !empty($_POST['password'])) {
			$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
			mysql_select_db("$ls");
			mysql_query("SET NAMES 'utf8'");
			$query = "SELECT id,name,password,access_level from account_data where name='$name' and password='$password'";
			$result = mysql_query($query);
			if(mysql_num_rows($result) == 1) {
				$user = array() ;
				$user = mysql_fetch_row($result) ;
				$_SESSION['id'] = session_id();
				$_SESSION['id_account'] = $user[0];
				$_SESSION['login_name'] = $user[1];
				$_SESSION['login_password'] = $user[2];
				$_SESSION['access_level'] = $user[3];
				//header("Location: index.php");
				echo "<script language='JavaScript'>window.location.href = 'index.php'; </script>";
			}
			if ($result['password'] !== $password) {
				$error_login = "Incorrect Username or Password";
			}
		}
		else {
			$error_login = "Fill in all fields";
		}
		echo '<div class="error" align="center">'.$error_login.'</div>';
	}
}

if (isset($_SESSION['id'])) {
	echo '<div class="dot">You are logged in as <b>'.$_SESSION['login_name'].'</b></div>';
	if (isset($_SESSION['id']) AND $_SESSION['access_level'] >= "$access_level") {
		echo '<div class="dot"><img src="img/admin.png" class="ico"><a href="admin.php">Account Administrator</a></div>';
		echo '<div class="dot"><img src="img/add.png" class="ico"><a href="index.php?action=addnews">Add News</a></div>';
	}
	echo '<div class="dot"><img src="img/user.png" class="ico"><a href="account.php">Account</a></div>';
	echo '<div class="dot"><img src="img/pass.png" class="ico"><a href="change.php">Change Password</a></div>';
	echo '<div class="dot"><img src="img/e-mail.png" class="ico"><a href="change_mail.php">Change E-Mail</a></div>';
	echo '<div class="dot"><img src="img/exit.png" class="ico"><a href="logout.php">Exit</a></div>';
}