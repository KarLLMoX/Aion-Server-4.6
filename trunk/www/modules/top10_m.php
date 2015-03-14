<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)

$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query = "SELECT ap, id, name, exp, race, gender, player_class, online FROM abyss_rank LEFT JOIN players ON player_id = id WHERE `ap`>1 ORDER BY `ap` DESC LIMIT 10";
$result = mysql_query($query);
$i=1;

while ($row = mysql_fetch_array($result)) {
	$ap = $row['ap'];
	require 'function.php';
	
	echo '<tr align="center">';
	echo '<td class="toptext">'.$i.'</td>';
	echo '<td class="toptext"><a href="info.php?action=info&id='.$row['id'].'">'.$name.'</a></td>';
	echo '<td class="toptext">'.$exp.'</td>';
	echo '<td class="toptext">'.number_format($ap,0, ' ',' ').'</td>';
	echo '<td class="toptext">'.$race.'</td>';
	echo '<td class="toptext">'.$player_class.'</td>';
	echo '<td class="toptext">'.$gender.'</td>';
	echo '<td class="toptext">'.$online.'</td>';
	echo '</tr>';
	$i++;
}
