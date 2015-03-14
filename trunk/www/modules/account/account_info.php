<?php $id = $_SESSION['id_account'];
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$ls");
mysql_query("SET NAMES 'utf8'");
$query = "SELECT name,email,access_level,activated,membership,expire,last_ip,donatemoney FROM account_data WHERE id='$id'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
    $name = $row['name'];
    $email = $row['email'];
    $access_levels = $row['access_level'];
    $activated = $row['activated'];
    $membership = $row['membership'];
    $expire = $row['expire'];
    $last_ip = $row['last_ip'];
    $donatemoney = $row['donatemoney'];
};
echo '<div class="hr"></div>
<table width="100%">
		<tr height="32">
			<td class="toptext">Account:</td>
			<td class="toptext">';
echo $name;;
echo '</td>
			<td class="toptext"></td>
		</tr>
		<tr height="32">
			<td class="toptext">E-Mail:</td>
			<td class="toptext">';
echo $email;;
echo '</td>
			<td class="toptext"></td>
		</tr>
		<tr height="32">
			<td class="toptext">Access Level:</td>
			<td class="toptext">';
echo access_account($access_levels);;
echo '</td>
			<td class="toptext"></td>
		</tr>
		<tr height="32">
			<td class="toptext">Status:</td>
			<td class="toptext">';
echo activ_account($activated);;
echo '</td>
			<td class="toptext"></td>
		</tr>
		<tr height="32">
			<td class="toptext">Account Privileges:</td>
			<td class="toptext">';
if ($membership != 0) {
    echo ship_account($membership) . ' to <font style="color:green; font-weight:bold;">' . str_replace('-', '.', $expire) . '</font></td>';
} else {
    echo ship_account($membership) . '</td>
				<td class="toptext">
				<a href="account.php?buy=premium">Premium (' . $member_ship_premium . ' Add.)</a> to ' . $day . ' Days
				<br/>
				<a href="account.php?buy=vip">VIP (' . $member_ship_vip . ' Add.)</a> to ' . $day . ' Days';
};
echo '		</tr>
		<tr height="32">
			<td class="toptext">Last IP:</td>
			<td class="toptext">';
echo $last_ip;;
echo '</td>
			<td class="toptext"></td>
		</tr>
		<tr>
			<td>On your Account:</td>
			<td>
				<a style="border-bottom:dashed 1px; text-decoration:none;" href="#pay.php">';
echo $donatemoney;;
echo ' to</a>
			</td>
		</tr>
</table>';;