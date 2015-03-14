<?php if (!defined('SAWEB')) {
    die('hacking attempt!');
}
$account_id = intval($_GET['id']);
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$ls");
mysql_query("SET NAMES 'utf8'");
$query = "SELECT name, access_level, activated, membership, email, donatemoney, expire FROM account_data WHERE id = '$account_id'";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_assoc($result)) {
    $exps = $row['expire'];
    $names = $row['name'];
    $activated = $row['activated'];
    $access_level = $row['access_level'];
    $membership = $row['membership'];
    $expire = $row['expire'];
    $email = $row['email'];
    $donatemoney = $row['donatemoney'];
    require 'modules/function_account.php';
}
if (isset($_POST['submit'])) {
    if (isset($_POST['access_level']) && isset($_POST['membership']) && isset($_POST['expire']) && isset($_POST['email']) && isset($_POST['donatemoney'])) {
        $access_level = trim($_POST['access_level']);
        $membership = trim($_POST['membership']);
        $expire = $_POST['expire'];
        $email = trim($_POST['email']);
        $donatemoney = trim($_POST['donatemoney']);
        $query = "UPDATE account_data SET access_level = '$access_level', membership = '$membership', email = '$email', expire = '$expire', donatemoney = '$donatemoney' WHERE id = '$account_id'";
        mysql_query($query) or die(mysql_error());
        echo "<script language='JavaScript'>alert('These have been modified');</script>";
    }
}
echo '
<form method="POST" action="admin.php?mod=info&action=info&id=' . $account_id . '">
<table width="100%">
	<tr height="32">
		<td class="toptext">Account:</td>
		<td class="toptext">' . $names . '</td>
	</tr>
	<tr height="32">
		<td class="toptext">Access Level:</td>
		<td class="toptext"><SELECT name="access_level">
								<OPTION VALUE="' . $access_level . '">' . access_account($access_level) . '</OPTION>
								<OPTION VALUE="0">Player</OPTION>
								<OPTION VALUE="1">Helper</OPTION>
								<OPTION VALUE="2">Game Master</OPTION>
								<OPTION VALUE="3">Head GM</OPTION>
								<OPTION VALUE="4">Administrator</OPTION>
								<OPTION VALUE="5">Head Administrator</OPTION>
							</SELECT>
		</td>
	</tr>
	<tr height="32">
		<td class="toptext">Account Privileges:</td>
		<td class="toptext"><SELECT name="membership">
								<OPTION VALUE="' . $membership . '">' . ship_account($membership) . '</OPTION>
								<OPTION VALUE="0">Normal</OPTION>
								<OPTION VALUE="1">Premium</OPTION>
								<OPTION VALUE="2">VIP</OPTION>
							</SELECT>
		</td>
	</tr>
	<tr height="32">
		<td class="toptext">Account Status:</td>
		<td class="toptext"><SELECT name="activated">
								<OPTION VALUE="' . $activated . '">' . activ_account($activated) . '</OPTION>
								<OPTION VALUE="0">Activated</OPTION>
								<OPTION VALUE="1">Deactivated</OPTION>
							</SELECT>
		</td>
	</tr>
	<tr height="32">
		<td class="toptext">Date of graduation Privileges (Format 1987-01-16):</td>
		<td class="toptext"><input type="text" name="expire" value="' . $expire . '"/></td>
	</tr>
	<tr height="32">
		<td class="toptext">E-Mail:</td>
		<td class="toptext"><input type="text" name="email" value="' . $email . '"/></td>
	</tr>
	<tr>
		<td class="toptext">On the Account:</td>
		<td class="toptext"><input type="text" name="donatemoney" value="' . $donatemoney . '"/></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" class="button-submit dark-shadow" value="Submit" name="submit" ></td>
	</tr>
</table>
</form>
<div class="clear"></div>';;
echo '	';;