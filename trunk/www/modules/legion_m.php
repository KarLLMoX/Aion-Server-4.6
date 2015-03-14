<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit by Lark (x714 serveraion.ru)

$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query ="SELECT players.name AS nick, legions.id, legions.name, legions.level, players.race, contribution_points FROM legions LEFT JOIN legion_members ON legions.id = legion_members.legion_id LEFT JOIN players ON legion_members.player_id = players.id WHERE legion_members.rank='BRIGADE_GENERAL' ORDER BY  contribution_points DESC";

$result = mysql_query($query);
$i=1;

while ($row = mysql_fetch_assoc($result)) {
require 'function.php';
        $name = $row['name'];
        $nick = $row['nick'];
        $level = $row['level'];
        $contribution_points = $row['contribution_points'];

$querys = "SELECT count(*) FROM legions LEFT JOIN legion_members ON legions.id = legion_members.legion_id LEFT JOIN players ON legion_members.player_id = players.id WHERE legion_members.legion_id='".$row['id']."'";
$results = mysql_query($querys);
$rs = mysql_fetch_array($results);

        echo '<tr align="center" height="32">';
        echo '<td class="toptext">'.$i++.'</td>';
        echo '<td class="toptext">'.$race.'</td>';
        echo '<td class="toptext"><a href="info_leg.php?action=info&id='.$row['id'].'">'.$name.'</a></td>';
        echo '<td class="toptext">'.$nick.'</td>';      
        echo '<td class="toptext">'.$rs[0].'</td>';
        echo '<td class="toptext">'.$level.'</td>';
        echo '<td class="toptext">'.number_format($contribution_points,0, ' ',' ').'</td>';
        echo '</tr>';
}