<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit Lark (x714 serveraion.ru)

// Account Status
function activ_account($active) {
	if($active == '0') {
		$activate = '<font color="red">Deactivated</font>';
	}else{
		$activate = '<font color="green">Activated</font>';
	}
	return $activate;
}

// Access Levels
function access_account($access) {
	if($access == '0') {$access_level = 'Player';}
		elseif($access == '1') {$access_level = '<font color="orange">Helper</font>';}
		elseif($access == '2') {$access_level = '<font color="blue">Game Master</font>';}
		elseif($access == '3') {$access_level = '<font color="blue">Head GM</font>';}
		elseif($access == '4') {$access_level = '<font color="red">Administrator</font>';}
		elseif($access == '5') {$access_level = '<font color="red">Head Administrator</font>';}
	return $access_level;
}

// Account Privileges
function ship_account($ship) {
	if($ship == '0') {$member_ship = 'Normal';}
	elseif($ship == '1') {$member_ship = 'Premium';}
	elseif($ship == '2') {$member_ship = 'VIP';}
	return $member_ship;
}