<?php
if(file_exists("../settings/settings.php")){
include_once("../settings/settings.php");
include_once(ROOT."/include/web.session.php");
}
?>
<script language="javascript" src="include/scripts/jquery-1.7.2.min.js"> </script>
<script language="javascript" src="include/scripts/infoboxmessages.js"> </script>
<ul id="infobox">
<?php
if(isset($_SESSION['newmessage'])&&$_SESSION['newmessage']==1){
if(!isset($_GET['remove'])){
	if(isset($_SESSION['infoboxmessages'])){
		foreach($_SESSION['infoboxmessages'] as $key => $value){
			echo"<li id='L{$key}' class='infoboxitem'>";
			echo urldecode ($value);
			echo"</li>";
		}
	}
}
else{
$logarray=array();
$logarray=$_SESSION['infoboxmessages'];
unset($logarray[$_GET['remove']]);
$_SESSION['infoboxmessages']=$logarray;

foreach($_SESSION['infoboxmessages'] as $key => $value){
			echo"<li id='L{$key}' class='infoboxitem'>";
			echo urldecode ($value);
			echo"</li>";
   }
}
	$_SESSION['newmessage']=0;
	}
	?>
</ul>