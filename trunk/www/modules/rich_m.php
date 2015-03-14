<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)

$i=1;
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query = "SELECT inventory.item_id, inventory.item_count, inventory.item_owner, players.id, players.name, players.exp, players.gender, players.race, players.player_class, players.world_id, players.online FROM inventory LEFT JOIN players ON item_owner = players.id WHERE inventory.item_id = 182400001 AND NOT players.name = '' ORDER by item_count DESC LIMIT 100";
$result = mysql_query($query);

echo '<table cellspacing="0" width="100%">';
echo '<tr align="center">';
echo '<td class="tophead"><b>Place</b></td> <td class="tophead"><b>Name</b></td> <td class="tophead"><b>Money</b></td> <td class="tophead"><b>Level</b></td> <td class="tophead"><b>Race</b></td> <td class="tophead"><b>Sex</b></td> <td class="tophead"><b>Class</b></td> <td class="tophead"><b>Status</b></td>';
echo '</tr>';

while($row = mysql_fetch_array($result)){
	$money = $row['item_count'];
	require 'function.php';
	echo "
	    <tr align='center'>
			<td class='toptext'><font size='2'>".$i."</font></td>
	        <td class='toptext'><font size='2'><a href='info.php?action=info&id=".$row['id']."'>".$name."</a></font></td>
			<td class='toptext'><font size='2'>".number_format($money,0, ' ',' ')."</font></td>
			<td class='toptext'><font size='2'>".$exp."</font></td>
			<td class='toptext'><font size='2'>".$race."</font></td>
			<td class='toptext'><font size='2'>".$gender."</font></td>
			<td class='toptext'><font size='2'>".$player_class."</font></td>
			<td class='toptext'><font size='2'>".$online."</font></td>
	    </tr>";
	$i++;
}