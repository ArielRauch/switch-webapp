<?php
include("../settings/settings.php");
include(ROOT."/include/lib/SwitchClientService_v4.0.php");
include(ROOT."/include/web.session.php");
class checkpush{
	function checkpush()
	{	
	//
	// retrieving all needed information from session variables
	//	
		$jobid=$_GET['sp'];
		$uname		= $_SESSION['SwUser'];
		$pass 		= $_SESSION['SwPass'];
		$IpandPort	= 'https://'.SWITCHSERVER.':'.SWITCHPORT;
		$client = new \switchclient\service($uname,$pass,$IpandPort);
		$job=$client->getUserJobWithHeavyInfo($jobid);
		$metadatas=$job->fillMetadata;
	//
	// generate push form
	//
?>        
<div id="checkpoint_metadata_area">
	<form action="include/client.process.php" method="post">
	<table class="checkpointimage" id="preview_html5validate"> 
		<tr>
			<td>
	        	<?php if (isSet($job->_thumbnaileRelativePath)) { ?>
	    			<img class="checkpointimage" src="include/<?php echo $job->_thumbnaileRelativePath; ?>" />
				<?php } else { ?>
					<img src="/public/images/question_small.jpg" />
				<?php } ?>
			</td>
			<td>
				<input type="hidden" name="download" value="1" />
			    <input type="image" name="download" src="images/download.png" alt="<?php echo DOWNLOAD ?>" />
			    <input type="hidden" name="job" value="<?php echo htmlentities(\json_encode($job)); ?>" />	
	    		<input type="hidden" name="jobid" value="<?php echo $job->prefix ?>" />
	    		<input type="hidden" name="controllerID" value="<?php echo $uid; ?>"/>
			</td>
		</tr>
	</table>
	</form>

	<form action="include/client.process.php" method="post">
	<table class="checkpointmetadatatable" id="push_html5validate"> 
    
	            
	            <!--  reference items 
	            <tr><td class="tbleleft"> Filename </td><td> <?php echo $job->name; ?></td></tr>
	            <tr><td class="tbleleft"> CheckPoint </td><td><?php echo$job->pointName; ?></td></tr>
	            <tr><td class="tbleleft"> submit point </td><td><?php echo $job->submittedTo ?></td></tr>       
	            <tr><td class="tbleleft">flow </td><td><?php echo $job->flowName ?></td></tr>
	            <tr><td class="tbleleft"> type  </td><td><?php echo $job->fileType ?></td></tr>
	            <tr><td class="tbleleft"> size </td><td><?php echo $job->size ?></td></tr>
	            <tr><td class="tbleleft"> modified </td><td><?php echo date("D d M Y h:m:s",strtotime($job->modified)); ?></td></tr>
	            <tr><td class="tbleleft"> initiated </td><td><?php echo date("D d M Y h:m:s",strtotime($job->initiated)); ?></td></tr>      
	            <tr><td class="tbleleft"> on Alert since </td><td><?php echo date("D d M Y h:m:s",strtotime($job->onAlertSince)); ?></td></tr>
	            
	            -->

		<?php 
			$names="";
			if (empty($metadatas)) {
				$metadatas = array();
				$nometadata ='true';
			}			
			if (!\is_array($metadatas)) {
				$metadatas = array($metadatas);
				$nometadata ='true';
			}
		?>		
			<?php
			if(count($metadatas)==0){
				echo "</td></tr><tr><td colspan='2'><h3>".NOMETADATAREQUIRED."</h3></td></tr>";
			}
			else
			{
				echo "</td></tr><tr><td colspan='2'><h3>".FILLMETADATA."</h3></td></tr>";
			}
			foreach ($metadatas as $index => $value) { ?> 
			<?php
				$variables = get_object_vars($value);
				$metaLabel = $variables['mtfLabel'];
				$metaDescription = $variables['mtfDescription'];
				$metaType = $variables['mtfDataType'];
				$metaFormat = $variables['mtfDataFormat'];
				$metaIsReq = $variables['mtfValueIsRequired']; //check if field is required
				$names.=',,,,'.rawurlencode($metaLabel);

				$required="";
				if($metaIsReq=='1'){
					$required='required=\"required\"';   //create HTML5 argument for required fields
				}
				switch($metaType){
				case 'string':  // if type is string
						echo "<tr><td class='metadatalabel'> <label class='inputLabel' for='field{$index}'>{$metaLabel}</label></td>".
						"<td><input {$required} name='metadata_field_".rawurlencode($metaLabel).
						"' type='{$metaType}'class='inputtxt' maxlength='30' class='metainput'/></td>".
						"<td>{$metaDescription}</td></tr>";
						break;
				case 'password' : // if type is password
						echo "<tr><td class='metadatalabel'> <label class='inputLabel' for='field{$index}'>{$metaLabel}</label></td>".
						"<td><input {$required} name='metadata_field_".rawurlencode($metaLabel).
						"' type='{$metaType}' class='inputtxt'maxlength='30' class='metainput'/></td>".
						"<td>{$metaDescription}</td></tr>";
						break;
				case 'time' :  // if type is time
						echo"<tr><td class='metadatalabel'> <label class='inputLabel' for='field{$index}'>{$metaLabel}</label></td>".
						"<td><input {$required} name='metadata_field_".rawurlencode($metaLabel).
						"' type='{$metaType}' pattern='^([0-1]?\d|2[0-3]):([0-5]\d)$' class='inputtxt' maxlength='30' class='metainput'/></td>".
						"<td>{$metaDescription}</td></tr>";
						break;
				case 'bool' : // if type is boolean
						echo "<tr><td class='metadatalabel'> <label class='inputLabel' for='field{$index}'>{$metaLabel}</label></td>".
						"<td><select name='metadata_field_".rawurlencode($metaLabel)."'>".
						"<option value='1'>Yes</option><option value='0'>No</option></select></td>".
						"<td>{$metaDescription}</td></tr>";
						break;					
				case 'date' : // if type is date
						echo"<tr><td class='metadatalabel'> <label class='inputLabel' for='field{$index}'>{$metaLabel}</label></td><td>";		
						$thislable=str_replace(' ', '',$metaLabel);
						$myCalendar = new tc_calendar($thislable, true, false);
						$myCalendar->setIcon("include/calendar/images/iconCalendar.gif");
						$myCalendar->setPath("include/calendar/");
						$myCalendar->setYearInterval(2000, 2020);
						$myCalendar->dateAllow('2008-05-13', '2015-03-01');
						$myCalendar->setDateFormat('j F Y');
						$myCalendar->setAlignment('left', 'bottom');
						$myCalendar->setOnChange("myChanged('$thislable')");	
						$myCalendar->writeScript();
						echo"</td><td class='metadatalabel'>{$metaDescription}<input type='hidden' name='metadata_field_".rawurlencode($metaLabel)."' id='metadata_field_".$thislable."' value=''/></td></tr>";			  
		  				break;
				case 'number' :// if type is  number
						echo"<tr><td class='metadatalabel'>  <label class='inputLabel' for='field{$index}'>{$metaLabel}</label></td>".
						"<td><input name='metadata_field_".rawurlencode($metaLabel).
						"' pattern='^[-+]?\d+(\.\d+)?$' type='{$metaType}'".
						"class='inputtxt' maxlength='30' class='metainput'/></td>".
						"<td>{$metaDescription}</td></tr>";
				break;
			}
			$pattern = '/^enum/';   // if type is dropdown

			if(preg_match($pattern, $metaType)) {
				echo"<tr><td class='metadatalabel'> <label class='inputLabel' for='field{$index}'>{$metaLabel}</label></td>".
				"<td class='metadatavalue'><select name='metadata_field_".rawurlencode($metaLabel)."'>";
				$shrink=str_replace("enum:","", $metaType);

				$optionArr=explode("\n",$shrink);
				foreach ($optionArr as $key => $value) {
					echo"<option>".$value."</option>";	
				}
				echo"</select></td><td>{$metaDescription}</td></tr>";
			}

			?>

		<?php  
		} 
		?>
		<tr>
			<td><input type="hidden" name="metadatas_names" value="<?php echo $names ?>"/>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<?php
			if (isSet($job->pushConnections)) { 
                
	        	if (empty($job->pushConnections)) {
                	$job->pushConnections = array();
                }
                if (!\is_array($job->pushConnections)) {
                    $job->pushConnections = array($job->pushConnections);
                }
	        ?>
			<td class="metadatalabel"><?php echo CHOOSECONNECTION ?>
			</td>
			<td><select name="connectionId">
				<?php foreach ($job->pushConnections as $index => $connection) { ?>
			 	<option value="<?php echo $connection->connId; ?>">
	        	<?php echo $connection->connName; ?>
	         	</option>
    	    	<?php } ?>
   				</select>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<?php if (isSet($job->pointId) && !empty($job->pointId)) { ?>
				<?php } else { ?>
			    <br /><br /><b>Download is not available:</b><br /> file not at checkpoint.
			<?php } ?>
			<td>
			</td>
			<td>
				<input type='submit' name='Push' id='Push' value='<?php echo PUSHBUTTON ?>' class='inputbtn' />
				<input type="hidden" name="controllerID" value="<?php echo $uid; ?>"/>
				<input type="hidden" name="jobid" value="<?php echo $job->prefix; ?>" />
				<input type="hidden" name="job" value="<?php echo htmlentities(\json_encode($job)); ?>" />
				<input type="hidden" name="hiddenPush" value="1" />
			</td>
		</tr>

	</table>
	</form>
</div>
	<?php } ?>
	<?php
	}
}
$a=new checkpush;
?>