<?php
//logging out means removing of the existing session on the system
	include("../settings/settings.php");
	include(ROOT."/include/web.session.php");
	session_destroy();
	header ('Location: ../'.STARTPAGE);
?>