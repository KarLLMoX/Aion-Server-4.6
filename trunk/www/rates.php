<?php
require "header.php";
?>

<div class="case">
	<div class="content">
		<div class="list">
		  <center>
			<div class="news-title">Server Rates</div>
				<table align="center">
				<div class="hr"></div>
				<div class="dot"><img src="img/rates/exp.png" class="ico"/>Exp: <?php echo $rate_exp;?></div>
				<div class="dot"><img src="img/rates/coin.png" class="ico"/>Kinah: <?php echo $rate_kinah;?></div>
				<div class="dot"><img src="img/rates/drop.png" class="ico"/>Drop: <?php echo $rate_drop;?></div>
				<div class="dot"><img src="img/rates/quest.png" class="ico"/>Quest: <?php echo $rate_quest;?></div>
				<div class="hr"></div>
				<div class="menu-title">Rates for Mobs (MaxHP & Power)</div>
				<div class="hr"></div>
				<div class="dot"><img src="img/rates/monster_1.png" class="ico"/>Junk Mobs: <?php echo $rate_m1;?></div>
				<div class="dot"><img src="img/rates/monster_2.png" class="ico"/>Normal Mobs: <?php echo $rate_m2;?></div>
				<div class="dot"><img src="img/rates/monster_3.png" class="ico"/>Elite Mobs: <?php echo $rate_m3;?></div>
				<div class="dot"><img src="img/rates/monster_4.png" class="ico"/>Hero Mobs: <?php echo $rate_m4;?></div>
				<div class="dot"><img src="img/rates/monster_5.png" class="ico"/>Legendary Mobs: <?php echo $rate_m5;?></div>
			    <div class="hr"></div>
				</table>
		  </center>
		</div>
	</div>
<?php require "sidebar.php"; ?>
</div>

<?php require "footer.php"; ?>