<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)

$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query = "SELECT ap, all_kill, rank, id, name, exp, race, gender, player_class FROM abyss_rank LEFT JOIN players ON player_id = id WHERE ap>1 ORDER BY ap DESC LIMIT 100";
$result = mysql_query($query);
$i=1;

while ($row = mysql_fetch_assoc($result)) {
	$ap = $row['ap'];
	$rank = $row['rank'];
	$all_kill = $row['all_kill'];
	require 'function.php';

	echo '<tr align="center" height="32">';
	echo '<td class="toptext">'.$i.'</td>';
	echo '<td class="toptext"><a href="info.php?action=info&id='.$row['id'].'">'.$name.'</a></td>';
	echo '<td class="toptext">'.$exp.'</td>';
	echo '<td class="toptext">'.$race.'</td>';
	echo '<td class="toptext">'.$player_class.'</td>';
	echo '<td class="toptext">'.$gender.'</td>';
	echo '<td class="toptext">'.number_format($ap,0, ' ',' ').'</td>';
	echo '<td class="toptext">'.$rank.'</td>';
	echo '<td class="toptext">'.$all_kill.'</td>';
	echo '</tr>';
	$i++;
}