<?php
include("../settings/settings.php");
include(ROOT."/include/lib/SwitchClientService_v4.0.php");
include(ROOT."/include/web.session.php");

$uname		= $_SESSION['SwUser'];
$pass 		= $_SESSION['SwPass'];
$IpandPort	= 'https://'.SWITCHSERVER.':'.SWITCHPORT;
$client = new \switchclient\service($uname,$pass,$IpandPort);
$messages = $client->getLogMessages();
$client->close();
$messages = array_reverse($messages);

?>
	<table id="messagestable">
	<?php
		$nrofmessages = count($messages);
		if ($nrofmessages > MAXIMUMNUMBEROFMESSAGES) {
			$nrofmessages = MAXIMUMNUMBEROFMESSAGES;
		}
		$even = true;
		for ($i = 0; $i < $nrofmessages; $i++) {
			$message = $messages[$i];
		
			if ($message->parsedMessage->operation == "") {
				continue;
			}
  
	  		$tmp = explode("T",$message->timeStamp);
	  		$timeStamp = $tmp[0]." ".substr($tmp[1],0,strpos($tmp[1],"."));

			if ($even == true) {
				$even = false;
			}
			else {
				$even = true;
			}
	
		    if ($even == true) { ?>
			    <tr class='evenmessage'> <?php
			}
			else { ?>
			    <tr class='oddmessage'> <?php
			} ?>
	
		    	<td class='messagecol1'>
   		 	    	<?php  echo $timeStamp ?>
	    		</td>
    			<td class='messagecol2'>
        			Flow : <?php  echo $message->flowName ?>
    			</td>
    			<td class='messagecol3'>
       		 		Job : <?php  echo substr($message->jobName,7) ?>
    			</td>
	    	</tr>
    
    		<?php  
    		if ($even == true) { ?>
	    		<tr class='evenmessage'> <?php
			}
			else { ?>
		    	<tr class='oddmessage'> <?php
			} ?>
	
				<td class='messagecol1'>
				</td>
       			<td class='messagecol2'>
           			<?php  echo $message->type ?>
       			</td>
       			<td class="messagecol3">
           			<b><?php  echo $message->parsedMessage->operation ?></b>
       			</td>
    		</tr>
			<?php  } if (sizeof($messages) == 0) {?>
	    	<tr>
       		 	<td colspan="10">No jobs here</td>
    		</tr>

		<?php  } ?>
	</table>
?>
<?php
/*
The different available fields can be found here for reference. Not all of them are
presently being used in the sample.
       <td>
            <?php  echo $message->recId ?>
       </td>
       <td class="text">
           <b><?php  echo $message->parsedMessage->operation ?></b>
       </td>
       <td>
            <?php  echo $message->module ?>
       </td>
       <td>
           <?php  echo $message->flowName ?>
       </td>
       <td>
           <?php  echo $message->jobName ?>
       </td>
       <td>
           <?php  echo $message->type ?>
       </td>
       <td>
           <?php  echo $message->serverName ?>
       </td>
       <td>
           <?php  echo $message->timeStamp ?>
       </td>
    </tr>
*/
?>