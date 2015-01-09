<div id="loginwindow">
<?php 
if(USER!=""){  //User is set in settings file
	$_SESSION['SwUser']	= USER;
	$_SESSION['SwPass']	= PASS;
	$_SESSION['Admin'] = 0;
}
if(!$_SESSION['LoggedIn']&&USER=="")   //user is not logged in and no user is set in settings file
{
?>
   <form method="POST" action="include/checkloginfromswitch.php">
        <table>
        	<tr><th colspan="2"><?php echo LOGINTITLE ?></th></tr>
	        <tr>                        
    	        <td class="loginlabel"><input type="hidden" name="hiddenLogin" value="1"><label for="txtLogin"><?php echo LOGINUSER ?></label></td>
        	    <td class="logininput"><input type="text" placeholder="<?php echo LOGINUSERHELP ?>" maxlength="30" name="txtLogin"/></td>            
	        </tr>
    	    <tr>
        	    <td class="loginlabel"><label for="passLogin" ><?php echo LOGINPWD ?></label></td>
            	<td class="logininput"><input type="password" name="passLogin" placeholder="<?php echo LOGINPWDHELP ?>" maxlength="30" /></td>        
			</tr>
    		<tr>
           		<td>&nbsp;</td><td><input type="submit" class="loginbutton" value="<?php echo LOGINBUTTON ?>" /></td>
	    	</tr>
    <tfoot class="error">
    	<tr><td></td><td>
    		<?php if(isset ($_GET['message'])) {
			echo $_GET['message'];
			} ?>
		</td></tr>
	</tfoot>
        </table>
	</form>                                   
<?php
}
 else   //user is logged in
{
?>	    

<table class="formtable">
    <tr>
    	<th><?php echo LOGINTITLE ?></th>
    </tr>
    <tr>
    	<td class="welcomemessage"><?php echo WELCOMEMESSAGE ?></td>
    </tr>
	<tr>                        
    	<td>
    	    <form method="POST" action="include/checkloginfromswitch.php">
    	        <input type="hidden" name="hiddenWorkspace" value="1">
    	        <input type="submit" class="loginbutton" value="<?php echo TOWORKSPACE ?>"/>
    	    </form>
    	</td>
    </tr
    	<?php if(USER==""){ ?>
        <td>
           	<form method="POST" action="include/checkloginfromswitch.php">
           		<input type="hidden" name="hiddenLogout" value="1">
           		<input type="submit" class="loginbutton" value="<?php echo LOGOUTBUTTON ?>"/>
           	</form>
        </td>
        <?php } ?>
	</tr>    
    <tr>
        <td>
        	<span class="error">
            	<?php if(isset ($_GET['message'])) {
            		echo $_GET['message'];
            	} ?>
        	</span>
        </td>
    </tr>          
</table>
	   
    <?php
}
?>			
</div>