<?php
// ServerAion Web by r3spons4bl3 (silkroad-german.de) 
// ServerAion Web 2.0 German by R3spons4bl3 (silkroad-german.de)


echo mysql_error();
$id = intval($_GET['id']);
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query ="
  SELECT * 
    FROM abyss_rank r 
    LEFT JOIN players p 
      ON p.id = r.player_id 
    LEFT JOIN player_life_stats s 
       ON p.id = s.player_id
    LEFT JOIN player_titles t 
       ON p.id = t.player_id
   LEFT JOIN inventory o 
      ON p.id = o.item_id
    WHERE id = '$id'
 ";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
	$exps = $row['exp'];
	$custom_points = $row['custom_points'];
	$creation_date = $row['creation_date'];
	$last_online = $row['last_online'];
	$ap = $row['ap'];
	$rank = $row['rank'];
	$all_kill = $row['all_kill'];
  $hp = $row['hp'];
	$mp = $row['mp'];
	$fp = $row['fp'];
	require 'function.php';
}	
?>




<div id="content">
<div class="pbox">
	<div class="menu-title">Zusammenfassung:</div>
	<div class="pbox-body">
		<table class="table">
			<tbody><tr>
				<td rowspan="4" width="112px"><img src="../img/noavatar.png" alt="" title="avatar" width="100px"></td>
				<td width="250px"><b><?php if (isset($name)) echo $name; ?></b></td>
				<td width="200px"></td>
				<td width="200px"><?php if (isset($exp)) echo $exp; ?></td>
			</tr>
			<tr>
				<td>Klasse: <?php if (isset($player_class)) echo $player_class; ?></td>
				<td>AP: <?php if (isset($ap)) echo $ap; ?></td>
				<td>HP: <?php if (isset($hp)) echo number_format($hp,0, ' ',' '); ?></td>
			</tr>
			<tr>
				<td>Rasse: <?php if (isset($race)) echo $race; ?></td>
				<td>Kills: <?php if (isset($all_kill)) echo $all_kill; ?></td>
				<td>MP: <?php if (isset($mp)) echo number_format($mp,0, ' ',' '); ?></td>
			</tr>
		</tbody></table>
	</div>
</div>		


<div class="pbox half m1">
	<div class="menu-title">Statistik</div>
	<div class="pbox-body">	
		<table class="table tleft">
			<tbody><tr>
				<td width="100px">Status</td>
				<td><?php if (isset($online)) echo $online; ?></td>
			</tr>
			<tr>
				<td>Location:</td>
				<td>
					<a href="http://aiondatabase.net/items/<?php $world_id ?>"><span class=""><?php if (isset($world_id)) echo $world_id; ?></a></td>
			</tr>
			<tr>
				<td>Titel:</td>
				<td><a href=""><span class=""><?php if (isset($title_id)) echo $title_id; ?></span></a></td>
			</tr>
			<tr>
				<td>Erfahrung:</td>
				<td><?php if (isset($exps)) echo number_format($exps,0, ' ',' '); ?></td>
			</tr>
			<tr>
				<td>AP:</td>
				<td>
					<span title=""><?php if (isset($ap)) echo number_format($ap,0, ' ',' '); ?></span> 
				</td><td>
			</td></tr>
			<tr>
				<td>Kills:</td>
				<td title="kills"><?php if (isset($all_kill)) echo $all_kill; ?></td>
			</tr>
			<tr>
				<td>Rang:</td>
				<td><?php if (isset($rank)) echo $rank ?></td>
			</tr>
			<tr>
				<td>Geschlecht:</td>
				<td>
					<a href=""><?php if (isset($gender)) echo $gender; ?></a></td>
			</tr>
			<tr>
				<td>Erstellt:</td>
				<td><?php if (isset($creation_date)) echo $creation_date; ?></td>
			</tr>
			<tr>
				<td>Zuletzt Online:</td>
				<td><?php if (isset($last_online)) echo $last_online; ?></td>
			</tr>
						<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>

		</tbody></table>
	</div>
</div>

<div class="pbox half1">
	<div class="menu-title">Ausr&uuml;stung</div>
	<div class="pbox-body">
<?php require "modules/equip_m.php"; ?>
	</div>
</div>

<div class="clear"></div>
</div>
