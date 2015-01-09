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
<title>Enfocus Switch webservices : Php Sample</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<!--
	//SWITCH WEB SERVICES
	//Copy the line following this comment and place it after the
	//<title> and before the </head> of your start page
-->
<link href="css/webservicesample.css.php" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="container">
    <div id ="banner">
    </div>

    <div id="divforintroduction">
    <h2>Welcome to the Enfocus Switch Webservices sample</h2>
    	<p>This is an example of a customized start page into which you can integrate a login window for the Switch Web Services.</p>
    	<p>You can build this page any way you like, but it is a good idea to divide it
    	into several div sections that are positioned and sized using css.</p>
    	<p>On this page there are four divs: one for the banner, one for this text you are reading,
    	one for the Smart Automation banner, and one for the footer.</p>
    	<p>The place and size of the div elements on this page are determined by the order
    	of appearance in the body of the page and by the <i>index.css</i> file.
    	<p>The <i>index.css</i> sets a fixed container width for the page of 960 pixels. When the
    	width of the browser window is smaller than 960 pixels a horizontal scroller will appear.</p>
    	<p>The idea is that you modify this page by adding a couple of lines of PHP code that you copy
    	from the <i>index naked.php</i> file. Insert the copied lines in the right location
    	so the login window appears on the top right part of the screen under the banner. You can then change the position of the
    	login panel in <i>index.css</i> and, if so desired, the position and look inside the panel in
    	<i>webservicesample.css.php</i>.
    	</p>
    	<p>Save the modified file as <i>index.php</i>.

    </div>
        <div id="divforloginwindow">    
        <?php
			include(ROOT."/include/loginwindow.php");
        ?>
    </div>

    <div id="divforimage">
		<p>
			<a href="http://www.enfocus.com/en/automation/resources">
		    <img height="277" alt="Smart resources to start automating" width="142" src="images/smart-resources-banner.png"/>
		    </a>
		</p>
    </div>
    
    <div id="footer">
        <a href="http://www.enfocus.com/contentpage.php?id=1179" target="_new">Trademark information</a> :: 
        <a href="http://www.enfocus.com/contentpage.php?id=1178" target="_new">Online Privacy Policy</a> :: 
        <a href="http://www.enfocus.com/contentpage.php?id=853" target="_new">Contact</a> :: 
        <a href="http://www.enfocus.com" target="_new">Enfocus.com</a>
    </div>

</div>
</body>
</html>
