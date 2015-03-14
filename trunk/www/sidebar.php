<!-- ServerAion Web by Pr00f & Sky (serveraion.ru) -->
<!-- ServerAion Web 2.0 German by R3spons4bl3 (silkroad-german.de) -->

<div class="sidebar">
	<div class="menu">
	
	<div class="menu-title">Main Menu</div>
		<a href="./" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['home'];?></a>
		<a href="download.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['downloads'];?></a>
		<a href="reg.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['account'];?></a>
		<a href="online.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['onlineplayer'];?></a>
		<a href="top100.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['top100'];?></a>
		<a href="legion.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['toplegion'];?></a>
		<a href="rich.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['toprich'];?></a>
		<a href="abyss.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['ratingabyss'];?></a>
		<a href="search.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['searchplayer'];?></a>
	
	
	<a href="gmbefehle.php" class="menu-button border shadow"><img src="img/bullet.png" /><?php echo $language['GMCommands'];?></a>
		
	
	<div class="hr"></div>
	
	<div class="menu-title"><?php echo $language['login'];?></div>
		<?php require "login_form.php"; ?>
	<div class="hr"></div>
	
	
<div class="menu-title">Statistik</div>
	
<center><table width="200px" cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
<td height="10" width="<?PHP echo $players_amt2; ?>" bgcolor="#e4680d" align="left"><span class=""><?php echo "".round(($con/$gesamt*100), 1)."%";?></span></td>
<td height="10" width="<?PHP echo $players_amt3; ?>" bgcolor="#0a8ccd" align="right"><span class=""><?php echo "".round(($pro/$gesamt*100), 1)."%";?></span></td>
</tr><tr>
<td colspan="2">
<table width="200px"><tbody><tr>
<td width="50%" align="left" class=""><?php echo $players_amt2; ?> Asmos</td>
<td width="50%" align="right" class=""><?php echo $players_amt1; ?> Elyos</td>
</tr>
<tr>
<td width="50%" align="left"><img src="img/asmodian.png" alt="Elyos" border="0">
</td>
<td width="50%" align="right"><img src="img/elyos.png" alt="Asmodians" border="0"></td>
</tr>
</tbody></table></td></tr></tbody></table></center>	
	
	
		<div class="dot">Accounts: <?php echo $accounts_amt; ?></div>
		<div class="dot">Characters: <?php echo $players_amt; ?></div>
    <div class="dot">GMs: <?php echo $gm_amt; ?></div>
		<div class="dot">Legions: <?php echo $legions_amt; ?></div>
		<br>
		<div class="dot">Elyos: <?php echo $players_amt1; ?></div>
		<div class="dot">Asmo: <?php echo $players_amt2; ?></div>
		


		
	<div class="hr"></div>

	<div class="menu-title">GMs online</div>
		<?php echo $gmonline; ?>
	<div class="hr"></div>
	
	<div class="menu-title">Vote</div>
		<center><img src="img/count_test.png"> <a href="http://serveraion.ru" target="_blank"><img src="img/serveraion.gif"></a></center>
	<div class="hr"></div>
	
	<div class="menu-title">Counters</div>
		<center><img src="img/count_test.png"> <img src="img/count_test.png"></center>
	</div>
	







</div>
			
</div>