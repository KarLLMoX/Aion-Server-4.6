<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit by Lark (x714 serveraion.ru)

$query ="SELECT players.name,players.id, players.exp, players.gender, players.player_class, players.world_id, players.title_id, players.online,legion_members.rank FROM legions LEFT JOIN legion_members ON legions.id = legion_members.legion_id LEFT JOIN players ON legion_members.player_id = players.id WHERE legions.id = '$id' ORDER BY exp DESC ";
$result = mysql_query($query);
?>
<div class="hr"></div>
<table cellspacing="0" width="100%">
	<tr align="center"> 
			<td class="tophead"><center>Nr.</center></td>
			<td class="tophead"><center>Nick</center></td>
			<td class="tophead"><center>Class</center></td>
			<td class="tophead"><center>Sex</center></td>
			<td class="tophead"><center>Levels</center></td>
			<td class="tophead"><center>Ð¢itle</center></td>
			<td class="tophead"><center>Location</center></td>
			<td class="tophead"><center>Rank</center></td>
			<td class="tophead"><center>Status</center></td>
	</tr>
<?php
$i=1;
while ($row = mysql_fetch_assoc($result)) {
	require 'modules/function.php';
	echo '<tr align="center" height="32">';
	echo '<td class="toptext">'.$i++.'</td>';
	echo '<td class="toptext"><a href="info.php?action=info&id='.$row['id'].'">'.$name.'</a></td>';
	echo '<td class="toptext">'.$player_class.'</td>';
	echo '<td class="toptext">'.$gender.'</td>';
	echo '<td class="toptext">'.$exp.'</td>';
	echo '<td class="toptext">'.$title_id.'</td>';
	echo '<td class="toptext">'.$world_id.'</td>';
	echo '<td class="toptext">'.$rank_leg.'</td>';
	echo '<td class="toptext">'.$online.'</td>';
	echo '</tr>';

}
?>
</table>