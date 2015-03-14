<?php
// ServerAion Web by r3spons4bl3 (silkroad-german.de) 
require "../../config.php";

echo mysql_error();
$id = intval($_GET['id']);
$sl = __file__;;
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$gs");
mysql_query("SET NAMES 'utf8'");
$query ="SELECT * FROM inventory WHERE item_owner = '326072' AND slot ='4096'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {

//if($row[slot] == 46) { echo "$row[item_id]<br>";}
//if("$slot" == 45) { echo "$item_id";}



//if("$slot" == 45) { echo "$item_id";}
//if("$slot" == 46) { echo "$item_id";}
//if("$slot" == 56) { echo "$item_id";}
echo "$item_id";
echo "$slot";
//if($row[slot] == 45) { echo "$row[item_id]<br>";}
}
?>