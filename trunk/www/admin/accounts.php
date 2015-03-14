<?php if (!defined('SAWEB')) {
    die('hacking attempt!');
}
$connect = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
mysql_select_db("$ls");
mysql_query("SET NAMES 'utf8'");
echo '<div class="menu-button border shadow">';
echo '<div class="news-title">Account Server List
			</div>            
            			
			<table cellspacing="0" width="100%">
				<tr align="center">
					<td class="tophead">ID</td>
					<td class="tophead">Account</td>
					<td class="tophead">Status</td>
					<td class="tophead">Last IP</td>
					<td class="tophead">Permissions</td>        
					<td class="tophead">Privileges</td>
				</tr>';
if (isset($_GET['page'])) {
    $page = intval($_GET['page']);
} else {
    $page = 1;
}
$select = 'SELECT COUNT(*) AS `counter` FROM `account_data`';
$query = mysql_query($select);
$row = mysql_fetch_assoc($query);
$elements = $row['counter'];
$pages = ceil($elements / 50);
if ($page < 1) {
    $page = 1;
} elseif ($page > $pages) {
    $page = $pages;
}
$start = ($page - 1) * 50;
if ($start < 0) $start = 0;
$select = "SELECT `id`,`name`,`access_level`, activated, `membership`, `last_ip` FROM `account_data`  ORDER BY `id` LIMIT $start, 50";
$query = mysql_query($select) or die(mysql_error());
$i = $start + 1;
$result = mysql_query($select);
while ($row = mysql_fetch_array($result)) {
    echo '<tr align="center">';
    echo '<td class="toptext">' . $row['id'] . '</td>';
    echo '<td class="toptext"><a href="admin.php?mod=info&action=info&id=' . $row['id'] . '">' . $row['name'] . '</a></td>';
    echo '<td class="toptext">' . $row['activated'] . '</td>';
    echo '<td class="toptext">' . $row['last_ip'] . '</td>';
    echo '<td class="toptext">' . $row['access_level'] . '</td>';
    echo '<td class="toptext">' . $row['membership'] . '</td>';
    echo '</tr>';
}
echo '</table>
	</div>';
echo '<div class="pages">';
echo '<div class="paginator" id="paginator3"></div>';
echo '<script type="text/javascript"> pag3 = new Paginator_Asmins(\'paginator3\', ' . $pages . ', 5, ' . $page . ', ""); </script>';
echo '</div>';;