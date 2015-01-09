<?php
include("../settings/settings.php");
include(ROOT."/include/lib/SwitchClientService_v4.0.php");
include(ROOT."/include/web.session.php");

if(isset($_POST['hiddenLogout'])){
	header ('Location: logout.php');
	exit;
}

if(isset($_POST['hiddenWorkspace'])){
	header ('Location: ../'.SWITCHWORKSPACE);
	exit;
}

else if(!isset($_SESSION['SwUser'])){
    $uname	= $_POST['txtLogin'];
    $pass 	= $_POST['passLogin'];
    $_SESSION['SwUser']	= $uname;
    $_SESSION['SwPass']	= $pass;
}
else{
    $uname=	$_SESSION['SwUser']	;
	$pass=	$_SESSION['SwPass']	;
}
$IpandPort	= 'https://'.SWITCHSERVER.':'.SWITCHPORT;

try{
	$client = new \switchclient\service($uname,$pass,$IpandPort);
	$client->close();

	if($client->isValidCredentials()){
		$session->addinfoboxmessage(LOGINSUCCES);
		if ($client->isAdminCredentials()) {
			$_SESSION['Admin'] = 1;
		}
		else {
			$_SESSION['Admin'] = 0;
		}
		header ('Location: ../'.SWITCHWORKSPACE);
		}
		else{
			unset($_SESSION['SwUser']);
			unset($_SESSION['SwPass']);
			unset($_SESSION['Admin']);
			header ('Location: ../'.STARTPAGE.'?message='.rawurlencode(LOGINFAILED));
		}
	}
	catch(Exception $e){
			unset($_SESSION['SwUser']);
			unset($_SESSION['SwPass']);
			unset($_SESSION['Admin']);
			header ('Location: ../'.STARTPAGE.'?message='.rawurlencode(CONNECTIONFAILED));
	}

 ?>