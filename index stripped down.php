<?php
	//SWITCH WEB SERVICES
	//Copy this PHP section and place it at the top of your customized file.
	//The include statement of the settings.php is relative to the location of the
	//file in which it is used. When you copy these lines into a file which is in the
	//root of the site and you put the sample in a subfolder, you will have to specify
	//the correct path in the first include statement. All other files are included
	//based on the value of ROOT which is defined in settings.php and therefore need not
	//be changed.
	include("settings/settings.php");
	if(file_exists(ROOT."/include/lib/SwitchClientService_v4.0.php")) {
		include(ROOT."/include/lib/SwitchClientService_v4.0.php");	
		include(ROOT."/include/web.session.php");
	}
	else{
		header ('Location: include/errorhandling.php?message=check%20ROOT%20preference');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
	//SWITCH WEB SERVICES
	//Copy the line following this comment and place it after the
	//<title> and before the </head> of your start page
-->
<link href="css/webservicesample.css.php" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <?php
    //SWITCH WEB SERVICES
    //Copy the following div section into the <body> part of your start page where the
    //login window will be shown. Keep the name of the id (divforloginwindow) or the
    //CSS will not work!
    ?>
    <div id="divforloginwindow">    
        <?php
			include(ROOT."/include/loginwindow.php");
        ?>
    </div>
    
</body>
</html>
