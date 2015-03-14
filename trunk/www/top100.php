<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
require "header.php";
?>

<div class="case">
	<div class="content">
		<div class="list">
			<div class="news-title">Top 100 Players
				<div style="float:right; ">Sorting: <SELECT onchange="document.location='?class='+this.value;">
					<OPTION>By Class</OPTION>
					<OPTION VALUE="Warrior">Warrior</OPTION>
					<OPTION VALUE="Gladiator">Gladiator</OPTION>
					<OPTION VALUE="Templar">Templar</OPTION>
					<OPTION VALUE="Scout">Scout</OPTION>
					<OPTION VALUE="Assassin">Assassin</OPTION>
					<OPTION VALUE="Ranger">Ranger</OPTION>
					<OPTION VALUE="Mage">Mage</OPTION>
					<OPTION VALUE="Sorcerer">Sorcerer</OPTION>
					<OPTION VALUE="Spirit_Master">Spirit Master</OPTION>
					<OPTION VALUE="Priest">Priest</OPTION>
					<OPTION VALUE="Cleric">Cleric</OPTION>
					<OPTION VALUE="Chanter">Chanter</OPTION>
					<OPTION VALUE="Artist">Artist</OPTION>
					<OPTION VALUE="Bard">Bard</OPTION>
					<OPTION VALUE="Engineer">Engineer</OPTION>
					<OPTION VALUE="Gunner">Gunner</OPTION>
					<OPTION VALUE="Rider">Rider</OPTION>
					</SELECT>
				</div>
			</div>
			
			<table cellspacing="0" width="100%">
				<tr align="center">
					<td class="tophead">Place</td>
					<td class="tophead">Name</td>
					<td class="tophead">Level</td>        
					<td class="tophead">Race</td>
					<td class="tophead">Class</td>
					<td class="tophead">Sex</td>
					<td class="tophead">Status</td>
				</tr>
				<?php require "modules/top100_m.php"; ?>
			</table>
		</div>
	</div>
	
<?php require "sidebar.php"; ?>
</div>

<?php require "footer.php"; ?>