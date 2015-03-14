<?php $connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$ls");
mysql_query("SET NAMES 'utf8'");
$result = mysql_query("SELECT count(*) FROM account_data WHERE account_data.activated =  '0'") or die(mysql_error());
$accounts_ban = mysql_result($result, 0, 0);
mysql_select_db("$dbnews");
$result = mysql_query('SELECT count(*) FROM news') or die(mysql_error());
$news = mysql_result($result, 0, 0);;
echo '<div class="menu-button border shadow" ><center><b>General information</b></center>
<div class="hr"></div>
<table width="100%">
		<tr height="32">
			<td class="toptext"><b>Script Version:</b></td>
			<td class="toptext">';
echo $rev_ver;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>Script Revision:</b></td>
			<td class="toptext">';
echo $rev_src;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>PHP Version:</b></td>
			<td class="toptext">';
echo PHP_VERSION;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>MySql Version:</b></td>
			<td class="toptext">';
echo mysql_get_server_info();;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>News:</b></td>
			<td class="toptext">';
echo $news;;
echo '</td>
		</tr>
		<tr height="32"><td Colspan=2><div class="hr"></div></td></tr>
		<tr height="32">
			<td class="toptext"><b>EXP Rate:</b></td>
			<td class="toptext">';
echo $rate_exp;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>Kinah Rate:</b></td>
			<td class="toptext">';
echo $rate_kinah;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>Drop Rate:</b></td>
			<td class="toptext">';
echo $rate_drop;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>Quest EXP Rate:</b></td>
			<td class="toptext">';
echo $rate_quest;;
echo '</td>
		</tr>
		<tr height="32"><td Colspan=2><div class="hr"></div></td></tr>
		<tr height="32">
			<td class="toptext"><b>Accounts:</b></td>
			<td class="toptext">';
echo $accounts_amt;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>Blocked:</b></td>
			<td class="toptext">';
echo $accounts_ban;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>Characters:</b></td>
			<td class="toptext">';
echo $players_amt;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>GMs:</b></td>
			<td class="toptext">';
echo $gm_amt;;
echo '</td>
		</tr>
		<tr height="32">
			<td class="toptext"><b>Legions:</b></td>
			<td class="toptext">';
echo $legions_amt;;
echo '</td>
		</tr>
</table>
</div>';;