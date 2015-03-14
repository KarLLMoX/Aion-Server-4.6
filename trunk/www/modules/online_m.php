<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)

$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query = "SELECT `id`,`name`,`exp`,`world_id`,`gender`,`race`,`player_class`,`online` FROM `players` WHERE `online`=1 ORDER BY `name`";
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	require 'function.php';
	
	echo '<tr align="center">';
	echo '<td class="toptext"><a href="info.php?action=info&id='.$row['id'].'">'.$name.'</a></td>';
	echo '<td class="toptext">'.$world_id.'</td>';
	echo '<td class="toptext">'.$exp.'</td>';
	echo '<td class="toptext">'.$race.'</td>';
	echo '<td class="toptext">'.$player_class.'</td>';
	echo '<td class="toptext">'.$gender.'</td>';
	echo '</tr>';
}