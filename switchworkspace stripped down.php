<?php
	//SWITCH WEB SERVICES
	//Copy this PHP section and place it at the top of your customized workspace page.
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
		header ('Location: include/errorhandling.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
	//SWITCH WEB SERVICES
	//Copy the four lines following this PHP section (2xscript, 2xlink)
	//and place them after the <title> and before the <head> of the workspace page
-->
<script language="javascript" src="include/scripts/jquery-1.7.2.min.js"> </script>
<script language="javascript" src="include/scripts/workspace.js.php<?php if(isset($_GET['page'])){echo"?page={$_GET['page']}&point={$_GET['point']}";} ?>"> </script>
<link href="css/switchworkspace.css" rel="stylesheet" type="text/css" />
<link href="css/webservicesample.css.php" rel="stylesheet" type="text/css" />
</head>
<body>
<html>

	<?php
	//SWITCH WEB SERVICES
	//There are five divs in this section <body> of your workspace page.
	//Keep the names of the id or the CSS will not work!
	?>
	<?php //Start copying from the next line ?>
	<?php if(isset($_GET['message'])){ ?>
		<div id="submit_or_checkpoint_message">
		</div>
		<div id="message">
			<p class="info">
				<?php
					echo $_GET['message'];
				?>
			</p>
		</div>
 	<?php } ?>
		<div id="usermenu">
			<?php
            	include("include/workspace_usermenu.php");
        	?>
    	</div>
		
		<div id="submit_or_checkpoint_list">
		</div>

		<div id="submit_or_checkpoint_metadata">
		</div>
	<?php //Stop copying at the previous line ?>	
	
</body>	
</html>
