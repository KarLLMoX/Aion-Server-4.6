<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)

$i=1;
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");

if (isset($_GET['class'])) {
	$class = mysql_real_escape_string($_GET['class']);
	$query = "SELECT `id`,`name`,`exp`,`race`,`gender`,`player_class`,`online` FROM `players` WHERE `player_class` = '".$class."' ORDER BY `exp` DESC LIMIT 100";
}
else {
	$query = "SELECT `id`,`name`,`exp`,`race`,`gender`,`player_class`,`online` FROM `players` WHERE `exp`>1 ORDER BY `exp` DESC LIMIT 100";
}

$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {
	require 'function.php';
	
	echo '<tr align="center">';
	echo '<td class="toptext">'.$i.'</td>';
	echo '<td class="toptext"><a href="info.php?action=info&id='.$row['id'].'">'.$name.'</a></td>';
	echo '<td class="toptext">'.$exp.'</td>';
	echo '<td class="toptext">'.$race.'</td>';
	echo '<td class="toptext">'.$player_class.'</td>';
	echo '<td class="toptext">'.$gender.'</td>';
	echo '<td class="toptext">'.$online.'</td>';
	echo '</tr>';
	$i++;
}