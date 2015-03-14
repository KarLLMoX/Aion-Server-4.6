<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit by Lark (x714 serveraion.ru)

require "header.php";
?>

<div class="case">
        <div class="content">
                <div class="list">
                        <div class="news-title"><center>Ð¢Ð¾p Legions</center></div>
                        <table cellspacing="0" width="100%">
                                <tr align="center">
                                        <td class="tophead">Place</td>
                                        <td class="tophead">Race</td>
                                        <td class="tophead">Name</td>
                                        <td class="tophead">Legate</td>
                                        <td class="tophead">Member</td>
                                        <td class="tophead">Level</td>
                                        <td class="tophead">Classes</td>
                                </tr>
                                <?php require "modules/legion_m.php";?>
                        </table>
                </div>
        </div>
    
<?php require "sidebar.php"; ?>
</div>

<?php require "footer.php"; ?>