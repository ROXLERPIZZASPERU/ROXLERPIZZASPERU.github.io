<?php
include("../res/x5engine.php");
$nameList = array("cfx","w23","fjg","43c","3pz","r7a","cpc","rky","78m","kkw");
$charList = array("2","K","C","D","W","J","Z","X","2","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
