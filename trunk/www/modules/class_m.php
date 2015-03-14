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
require 'function.php';
$gmonline .= $count['name']." ";
}
if ($gmonline == "") {$gmonline.="No GMs online";}


$query_gm1 = "SELECT COUNT(race) FROM players";


$result = mysql_query("SELECT count(*) FROM players WHERE player_class='WARRIOR'") or die(mysql_error());
$players_WARRIOR = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='GLADIATOR'") or die(mysql_error());
$players_GLADIATOR = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='TEMPLAR'") or die(mysql_error());
$players_TEMPLAR = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='SCOUT'") or die(mysql_error());
$players_SCOUT = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='ASSASSIN'") or die(mysql_error());
$players_ASSASSIN = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='RANGER'") or die(mysql_error());
$players_RANGER = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='MAGE'") or die(mysql_error());
$players_MAGE = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='SORCERER'") or die(mysql_error());
$players_SORCERER = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='SPIRIT_MASTER'") or die(mysql_error());
$players_SPIRIT_MASTER = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='PRIEST'") or die(mysql_error());
$players_PRIEST = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='CLERIC'") or die(mysql_error());
$players_CLERIC = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='CHANTER'") or die(mysql_error());
$players_CHANTER = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='ENGINEER'") or die(mysql_error());
$players_ENGINEER = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='GUNNER'") or die(mysql_error());
$players_GUNNER = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='RIDER'") or die(mysql_error());
$players_RIDER = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='ARTIST'") or die(mysql_error());
$players_ARTIST = mysql_result($result, 0, 0);
$result = mysql_query("SELECT count(*) FROM players WHERE player_class='BARD'") or die(mysql_error());
$players_BARD = mysql_result($result, 0, 0);




mysql_close($connect);
$players_class_all = $players_GLADIATOR + $players_TEMPLAR + $players_SCOUT + $players_ASSASSIN + $players_RANGER + $players_SORCERER + $players_SPIRIT_MASTER + $players_CLERIC + $players_CHANTER + $players_GUNNER + $players_RIDER + $players_ARTIST + $players_BARD;