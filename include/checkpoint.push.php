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
//		$p = new \switchclient\GetJobsMetadataInfo();
//         $p->jobsId = new \switchclient\MetadataInfoID();
//         $p->jobsId->jobId = $jobid;
//         $x = $client->GetJobsMetadataInfo($p); // nothing here
//         $xml = $x->jobsInfo->metadataXmlStr;
// //        var_dump($x->jobsInfo->metadataInfo->metadataXmlStr);
//         $r->jobsInfo->metadataInfo = $x;
//		$xxx = $client->getJobDetailed($jobid);
//		print_r(simplexml_load_string($xxx->metadataXmlStr));
	//
	// generate push form
	//

?>     

<?php
$xml = $job->metadataXmlStr;

//print_r($xml);
//print_r("________________________________________________");
$xml1=simplexml_load_string($job->metadataXmlStr) or die("Error: Cannot create object");
//print_r($xml1);
		$xml = str_replace("'","\u0027",$xml);
		$xml = str_replace("\n","",$xml);
		$xml = str_replace("\r","",$xml);

?>
 <script>
	$(function(){
	
		var xml = '<?php echo $xml ?>';
//		var metadatas = '<?php echo $metadatas ?>';
		if (console.log) console.log(xml);
//		if (console.log) console.log("AAAAAA:" + metadatas);
		var x2js = new X2JS();
		var jsonObj = x2js.xml_str2json( xml );
		var metas = jsonObj.ValueDescription;
		window.g_xml = xml;
		window.g_metas = metas;
		
		var applyDependency = function(condition, expected, actual){
			if(condition == 'Equals'){
				return expected == actual;
			}else if(condition == 'Matches'){
				var re = new RegExp(expected);
				return re.test(actual);
			}
			return false;
		};
		
		var applyDependencies = function(init){
			for (var prop in metas) {
				if (metas.hasOwnProperty(prop)) {
					//console.debug(prop);
					var meta = metas[prop];
					if(init && meta && meta['__text']){
						var myDefault = meta['__text'];
						//set default value
						var myName = meta['_LocalizedTagName'];
						var myLbl = $('label:contains("' + myName + '")');
						var myRow = myLbl.parentsUntil('table','tr');
						var myInput = myRow.find('input,select');
						if(myInput){
							console.debug('set default of ' + myName + ' to ' + myDefault);
							if(myInput.is('select')){
								myDefault = (myDefault == 'No' ? '0' : (myDefault == 'Yes' ? '1' : myDefault) );
							}
							myInput.val(myDefault);
						}
					}

					//apply dependency
					if(meta && meta['_Dependency']){
						var depId = meta['_Dependency'];
						//console.debug('depId found: ' + depId);
						var depMeta = metas[depId];
						if(depMeta){
							var depName = depMeta['_LocalizedTagName'];
							//console.debug('dep found: ' + depName);
							var depLbls = $('label:contains("' + depName + '")');
							var depLbl = null;
							depLbls.each(function(){
								if($(this).text() == depName)
									depLbl = $(this);
							});
							var depElem = depLbl.parent().next().find('input,select');
							var depValue = depElem.find("option:selected").text();
							
							var condition = meta['_DependencyCondition'];
							var expected = meta['_Dependencyvalue'];

							var myName = meta['_LocalizedTagName'];
							var myLbl = $('label:contains("' + myName + '")');
							var myRow = myLbl.parentsUntil('table','tr');

							if(init)
								console.debug(prop +  ' (' + myLbl.text() + ') depends on ' + depId  + ' (' + depLbl.text() + ')');
						
							var conditionHolds = applyDependency(condition, expected, depValue);
							if(!conditionHolds){
								console.debug('hiding: ' + prop + ' (' + myLbl.text() + ')');
								myRow.hide();
								myRow.next().hide();
							}else{
								console.debug('showing: ' + prop + ' (' + myLbl.text() + ')');
								myRow.show();
								myRow.next().show();
							}
							if(init)
								depElem.change(function(){applyDependencies();});
						}
					}
				}
			}
		}
		
		applyDependencies(true);
	});
 </script>


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