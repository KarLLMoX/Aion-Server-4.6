<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// Eddit by Lark (x714 serveraion.ru)

/*
if(function_exists('fsockopen')) {

if (!$socket = @fsockopen("YOUR.IP.HERE", 80, $errno, $errstr, 30)) { 
echo "Offline!"; 
} else { 
echo "Online!"; 
fclose($socket); }

}
else {
echo "fsockopen is not enabled";
} 
*/

<ul id="nav">
  <li><a href="modules/faq/faq1.php">Page 1</a></li>
  <li><a href="modules/faq/faq2.php">Page 2</a></li>
  <li><a href="modules/faq/faq3.php">Page 3</a></li>
</ul>
 
<div id="ajax-content">This is default text, which will be replaced</div>
?>
<script type="text/javascript">
$(document).ready(function() {
    $("#nav li a").click(function() {

        $("#ajax-content").empty().append("<div id='loading' class='text-center'><img src='images/loading.gif' alt='Loading' /></div>");
        $("#nav li a").removeClass('current');
        $(this).addClass('current');

        $.ajax({ url: this.href, success: function(html) {
            $("#ajax-content").empty().append(html);
            }
	});
	return false;
    });
	 $("#ajax-content").empty().append("<div id='loading' class='text-center'><img src='images/loading.gif' alt='Loading' /></div>");
	$.ajax({ url: 'page_1.html', success: function(html) { 
            $("#ajax-content").empty().append(html);
	} 
    });

});
</script>

