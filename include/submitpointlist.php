<?php
include("../settings/settings.php");
include_once(ROOT."/include/web.session.php");	
include_once(ROOT."/include/lib/SwitchClientService_v4.0.php");
if(isset($_GET['refresh'])){
	unset($_SESSION['submitPoints']);
}
if(isset($_GET['clicked'])){
	unset($_SESSION['FORMERRORS']);
}
if(!isset($_SESSION['submitPoints'])){
	$uname		= $_SESSION['SwUser'];
	$pass 		= $_SESSION['SwPass'];
	$IpandPort	= 'https://'.SWITCHSERVER.':'.SWITCHPORT;
	$client = new \switchclient\service($uname,$pass,$IpandPort);
	$submitPoints =$client->getAllSubmitPoints();
	$_SESSION['submitPoints']=$submitPoints;
	$client->close();
	$session->addinfoboxmessage(SUBMITPOINTSLOADED);
	echo"<script>
		$('#infobox').load('include/infobox.php');	
	</script>";
}
else{
	$submitPoints=$_SESSION['submitPoints'];
}
?>
<script language="javascript" src="include/scripts/submitpoints.js.php"> </script>
<ul>
<li class="refresh"><img src="images/refresh.png"/></li>
    <?php 
		foreach ($submitPoints as $index => $point) {
			echo"<li class='submitpointlist' name='{$point->spId}::{$point->flowId}' id={$index}>{$point->spData->name}</li>";
		}
	?>
</ul>
