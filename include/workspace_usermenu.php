<!--

//This file places the menu of submit points, checkpoints and messages in an unordered list.
//In the settings file these can be switched off.

-->

<ul id="usermenulist">

	<?php
	if (SUBMITPOINTS != "") {
	?>
		<li class="loadsubmitpoints"><?php echo SUBMITPOINTS ?></li>
	<?php
	}
	
	if (CHECKPOINTS != "") {
	?>
		<li class="loadcheckpoints"><?php echo CHECKPOINTS ?></li>
	<?php
	}

	if (MESSAGES != "" && $_SESSION['Admin']==1) {
	?>
		<li class="loadmessages"><?php echo MESSAGES ?></li>
	<?php
	}
	if(USER==""){
	?>
    <li class="logoutbutton"><?php echo LOGOUTBUTTON ?></li>
    <?php } 
	
	if(USER!=""){
	?>
    <li class="homebutton"><?php echo HOMEBUTTON ?></li>
    <?php } ?>

</ul>

<div class="loaderimg"></div>