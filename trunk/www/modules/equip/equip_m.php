<?php
// ServerAion Web by r3spons4bl3 (silkroad-german.de) 


echo mysql_error();
$id = intval($_GET['id']);
$sl = 4096;
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query ="SELECT * FROM inventory WHERE item_owner = '$id' AND slot ='$sl' AND is_equiped > 0";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
  $slot = $row['slot'];
	$item_id = $row['item_id'];
	$fp = $row['fp'];

	echo '<tr align="center">';
	echo '<td class="toptext">';if("$slot" == 46) { echo "$item_id";}echo'</td>';
	echo '<td class="toptext">';if("$slot" == 47) { echo "$item_id";}echo'</td>';
	echo '<td class="toptext">';if("$slot" == 65535) { echo "$item_id";}echo'</td>';
	echo '</tr>';


if($row[slot] == 45) { echo "$row[item_id]<br>";}
if("$sl" == 46) { echo "$item_id";}




//if($row[slot] == 46) { echo "$row[item_id]<br>";}
//if("$slot" == 45) { echo "$item_id";}



//if("$slot" == 45) { echo "$item_id";}
//if("$slot" == 46) { echo "$item_id";}
//if("$slot" == 56) { echo "$item_id";}
echo "$item_id";
//echo "$slot";
//if($row[slot] == 45) { echo "$row[item_id]<br>";}
?>






							<div class="equip">
                    <div style="position:absolute; top:273px; left:175px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/123001401"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_belt_u01.png"></span></a></div>
                    <div style="position:absolute; top:65px; left:14px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/125003768"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_rb_head_u01.png"></span></a></div>
                    <div style="position:absolute; top:108px; left:14px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/120001478"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_earring_u01.png"></span></a></div>
                    <div style="position:absolute; top:108px; left:175px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/120001478"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_earring_u01.png"></span></a></div>
                    <div style="position:absolute; top:65px; left:175px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/121001355"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_necklace_e01.png"></span></a></div>
                    <div style="position:absolute; top:232px; left:14px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/122001624"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_ring_e01.png"></span></a></div>
                    <div style="position:absolute; top:232px; left:175px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/122001624"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_ring_e01.png"></span></a></div>
                    <div style="position:absolute; top:273px; left:14px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/114101465"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_rb_shoes_s01.png"></span></a></div>
                    <div style="position:absolute; top:3px; left:118px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/169000010"><span class="result"><img class="icon-name" src="http://aiondatabase.net/items/icon_item_battery07.png"></span></a></div>
                    <div style="position:absolute; top:40px; left:95px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/187000114"><span class="result"><? if("$slot" == 32768) { echo "$item_id";}?><img class="icon-name" src="http://aiondatabase.net/items/icon_item_feather02.png"></span></a></div>
                    <div style="position:absolute; top:3px; left:68px;" class="equip-ico">
                    <a class="aion-icon" href="http://aiondatabase.net/items/169000010"><span class="result"><img class="icon-name" src="http://aiona.net/icons/items/icon_item_battery07.png"></span></a></div>
                    </div>
					<div class="clear"></div>

<?php
}
?>