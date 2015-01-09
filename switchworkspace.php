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
<title>Enfocus Switch webservices : Php Sample : workspace</title>
<?php
	//SWITCH WEB SERVICES
	//Copy the four lines following this PHP section (2xscript, 2xlink)
	//and place them after the <title> and before the <head> of the workspace page
?>
<script language="javascript" src="include/scripts/jquery-1.7.2.min.js"> </script>
<script language="javascript" src="include/scripts/workspace.js.php
<?php if(isset($_GET['page'])){echo"?page={$_GET['page']}";}if(isset($_GET['point'])){echo"&point={$_GET['point']}";}if(isset($_GET['refresh'])){echo"&refresh={$_GET['refresh']}";} ?>"> 
</script>
<link href="css/switchworkspace.css" rel="stylesheet" type="text/css" />
<link href="css/webservicesample.css.php" rel="stylesheet" type="text/css" />
</head>
<body>
<html>
<!--
	SWITCH WEB SERVICES
	Copy the infobox div after these comments and place it somewhere in the
	body, preferably towards the top. It is a div where information messages
	(login successful, job submitted, job pushed, etc.)  will be displayed.
-->
<div id="infoboxdiv">
    <?php
     include("include/infobox.php");
    ?>
</div>
<div id="container">

    <div id ="banner">
    </div>

    <div id="divforintroduction">
	    <p>This is the page where the user gets a workspace where the actual work is taking
	    place. Below is a user menu where submit points, checkpoints, and messages can be
	    shown.</p>
	    <p>On the left a list of submit points or checkpoints will be shown. To the right the
	    metadata, if any, will be shown. Messages are just shown in a plain list.</p>
	    <p>At the bottom of the page there is a small banner showing the weather forecast for
	    Ghent as an illustration of the fact that you are responsible for building anything outside
	    of the workspace proper.</p>
    </div>

	<?php
		//SWITCH WEB SERVICES
		//There are five divs in this section <body> of your workspace page.
		//Keep the names of the id or the CSS will not work!
	?>
	<?php //Start copying from the next line ?>
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
	
    <div id="footer">
		<span style="display: block !important; width: auto; text-align: center; font-family: sans-serif; font-size: 12px;"><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:00000.15.06428&bannertypeclick=wu_clean2day" title="Gent, Belgium Weather Forecast" target="_blank">
		<img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_clean2day_metric_cond&airportcode=EBCV&ForcedCity=Gent&ForcedState=Belgium&wmo=06428&language=EN" alt="Find more about Weather in Gent, BX" width="300" />
		</span>
    </div>

</div>

    
</body>	
</html>
