<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
require "header.php";
?>

<div class="case">
	<div class="content">
		<div class="list">
			<div class="news-title"><center>Online Players</center></div>
			<table cellspacing="0" width="100%">
				<tr align="center">
					<td class="tophead">Name</td>
					<td class="tophead">Location</td>
					<td class="tophead">Level</td>
					<td class="tophead">Race</td>
					<td class="tophead">Class</td>
					<td class="tophead">Sex</td>
				</tr>
				<?php require "modules/online_m.php";?>
			</table>
		</div>
	</div>
    
<?php require "sidebar.php"; ?>
</div>

<?php require "footer.php"; ?>