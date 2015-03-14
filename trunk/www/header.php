<?php
//error_reporting(0);
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// ServerAion Web 2.0 German by R3spons4bl3 (silkroad-german.de)


if (!file_exists("config.php")) {
	header("Location: install.php");
}
session_start();

define('IN_TOOL', 1);
include("config_language.php");
$lang = (trim($_GET['lang']) != "") ? $_GET['lang'] : LANG_STANDARD;
if (in_array($lang, $lang_array))
{
include("language/" . $lang . ".php");
$hinweis_text = $language['hinweis'];
}
else
{
include("language/" . LANG_STANDARD . ".php");
$hinweis_text = $language['sprachauswahlfehler'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ServerAion Web</title>
<LINK href="img/favicon.png" rel="shortcut icon" />
<LINK href="style/style.css" rel="stylesheet" type="text/css" />
<LINK href="style/Navigation.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="style/tooltip.js"></script>
<!-- Page Navigation -->
<LINK rel="stylesheet" type="text/css" href="style/page.css" />
<script type="text/javascript" src="style/page.js"></script>
<script type="text/javascript" src="style/page_admin.js"></script>
<!-- BB Code -->
<LINK rel="stylesheet" type="text/css" href="style/bbcodes.css" />
<script type="text/javascript" src="style/jquery.min.js"></script>
<script type="text/javascript" src="style/jquery.cleditor.min.js"></script>
<!-- Knowledge Base -->
<script type="text/javascript" src="style/aiondatabase.js"></script>
<script type="text/javascript" src="http://www.aiondatabase.com/js/exsyndication.js"></script>




</head>
<body>

<?php require "config.php"; ?>
<?php require "modules/status_m.php"; 
?>
<div class="nav-bar-left"></div><div class="nav-bar-middle"></div><div class="nav-bar-right"></div>
<div class="sprache">
<div class="head-status border shadow">
<div id="languages">
Sprachauswahl:
<a href="index.php?lang=englisch"><img src="img/en.png"></a>
<a href="index.php?lang=deutsch"><img src="img/de.png"></a>
</div>	
</div>
</div>
<div class="width">
	<div class="head-status border shadow"><?php echo "Login: "; echo $login ? "<font color='#00CC00'><b>Online</b></font>" : "<font color='red'><b>Offline</b></font>"; ?></div>
	<div class="head-status border shadow"><?php echo "Game: "; echo $game ? "<font color='#00CC00'><b>Online</b></font>" : "<font color='red'><b>Offline</b></font>"; ?></div>
	<div class="head-status border shadow"><?php echo "Online:  <b>$playersonline</b>"; ?></div>
	<div class="head-status border shadow"><?php echo $address ?></div>


<? //include "modules/navigation.php";?>

<ul class="nav">
<li><a href="#">Home</a></li>
<li class="dropdown"> <a href="#">Link 1</a>
<ul>
<li><a href="#">Unterlink 1</a></li>
<li><a href="#">Unterlink 2</a></li>
<li><a href="#">Unterlink 3</a></li>
<li><a href="#">Unterlink 4</a></li>
<li class="dropdown"> <a href="#">Unterlink 5</a>
<ul>
<li><a href="#">Unterlink 5 Level 1</a></li>
<li><a href="#">Unterlink 5 Level 1</a></li>
<li><a href="#">Unterlink 5 Level 1</a></li>
<li><a href="#">Unterlink 5 Level 1</a></li>
<li class="dropdown"> <a href="#">Unterlink 5 Level 1</a>
<ul>
<li><a href="#">Unterlink 5 Level 2</a></li>
<li class="dropdown"> <a href="#">Unterlink 5 Level 2</a>
<ul>
<li><a href="#">Unterlink 5 Level 3</a></li>
<li><a href="#">Unterlink 5 Level 3</a></li>
<li><a href="#">Unterlink 5 Level 3</a></li>
</ul>
</li>
<li><a href="#">Unterlink 5 Level 2</a></li>
<li><a href="#">Unterlink 5 Level 2</a></li>
<li><a href="#">Unterlink 5 Level 2</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="#">Link 2</a></li>
<li><div style="height: 1px;padding-left:140px;width: 100px; margin: 10px;"></div></li>
<li><a href="#">Link 3</a></li>
<li><a href="#">Link 4</a></li>
</ul>
	
	
	
<div class="head-menu border-top shadow">	</div>	
</div>