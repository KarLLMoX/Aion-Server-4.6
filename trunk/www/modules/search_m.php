<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit Lark (x714 serveraion.ru)

if(isset($_POST['submit'])) {
	
	if(!empty($_POST['name'])) {
		$input_name = substr($_POST["name"], 0, 20);
		$input_name = trim(mysql_real_escape_string($input_name));
		
		$connect = mysql_connect($dbhost,$dbuser,$dbpassword);
		mysql_select_db($gs);
		mysql_query("set names 'utf8'"); 
		$query = "SELECT `id`, `name` FROM `players` WHERE `name` = '$input_name'";
		$result = mysql_query($query);
		$results_number = mysql_numrows($result); 
		
		if ($results_number!=0) {
			while ($row = mysql_fetch_assoc($result)) {
				$name = $row['name'];
				if ($name==true) {
					echo '<script language="JavaScript">window.location.href = "info.php?action=info&id='.$row['id'].'"; </script>';
				}
			}
		}
		else {
			$error = 'Player "'.$input_name.'" Not found';
		}
	}
	else {
		$error = "Enter the Name";
	}
}