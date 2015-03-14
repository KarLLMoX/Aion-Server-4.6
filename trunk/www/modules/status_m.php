<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// ServerAion Web 2.0 German by R3spons4bl3 (silkroad-german.de)

$game = @fsockopen($server, $portgame, $errno, $errstr, $timeout);
$login = @fsockopen($server, $portlogin, $errno, $errstr, $timeout);

$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db($gs);
mysql_query("SET NAMES 'utf8'");
$query = "SELECT count(*) FROM `players` WHERE `online`=1";
$result = mysql_query($query);

$rs = mysql_fetch_array($result);
$rscount = $rs[0];
if ($rscount >= 0) {$playersonline = "<font color=white>" .$rscount. "</font>";}
if ($rscount >= 100) {$playersonline = "<font color=yellow>" .$rscount. "</font>";}
if ($rscount >= 200) {$playersonline = "<font color=orange>" .$rscount. "</font>";}
if ($rscount >= 300) {$playersonline = "<font color=red>" .$rscount. "</font>";}
if ($rscount >= 400) {$playersonline = "<font color=magenta>" .$rscount. "</font>";}


$query_gm = "SELECT players.name FROM players INNER JOIN $ls.account_data ON players.account_id = $ls.account_data.id WHERE $ls.account_data.access_level >  '0' AND players.online = '1'";
$result_gm = mysql_query($query_gm);
$gmonline = "";
while ($count = mysql_fetch_array($result_gm)) {
$gmonline .= $count['name']." ";
}
if ($gmonline == "") {$gmonline.="No GMs online";}


$query_gm1 = "SELECT COUNT(race) FROM players";



$result = mysql_query("SELECT count(*) FROM $ls.account_data") or die(mysql_error());
$accounts_amt = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players") or die(mysql_error());
$players_amt = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE race='ELYOS'") or die(mysql_error());
$players_amt1 = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE race='ASMODIANS'") or die(mysql_error());
$players_amt2 = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM legions") or die(mysql_error());
$legions_amt = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM $ls.account_data WHERE access_level > 0") or die(mysql_error());
$gm_amt = mysql_result($result, 0, 0);
mysql_close($connect);
$p1 = $players_amt1;
$p2 = $players_amt2;
$players_amt3 = $players_amt1 + $players_amt2;
$gesamt = $players_amt3;
$pro = $players_amt1;
$con = $players_amt2;
 


