<?php

include("../settings/settings.php");
include(ROOT."/include/lib/SwitchClientService_v4.0.php");
include(ROOT."/include/web.session.php");

class submitMetadata{
	function submitMetadata(){
		global $session;
		if(isset($_GET['clicked']))
		{
			if(isset($_SESSION['FORMERRORS'])){
				unset($_SESSION['FORMERRORS']);
			
			}
		}
		$p=$_GET['p'];
		$sp=$_GET['sp'];
		$spValue=explode ('::',$sp);
		$submitPointID=$spValue['0'];
		$flowID=$spValue['1'];
		$pointselector=$submitPointID."::".$flowID;
		$retmetadate=$this->getMetadata($flowID,$submitPointID);
		$metadatanames=",,,,";
?>

<form enctype="multipart/form-data" id="upload_html5validate" method="post" action="include/client.process.php">
<table class="metadatatable">
<tr><th colspan="2"><?php echo $retmetadate->name ?></th></tr>


<?php

if(count($retmetadate->metadata)==0)
	{
		echo "</td></tr><tr><td colspan='2' class='nometadata'>".NOMETADATAREQUIRED."</td></tr>";
	}
else
	{
		echo "<tr><td colspan='2'><h3>".FILLMETADATA."</h3></td></tr>";
	}

?>


<?php
foreach ($retmetadate->metadata as $index => $point) {

$myLabel 		= $point->mtfLabel;
$mydescription	= $point->mtfDescription;
$myDataType		= $point->mtfDataType;
$myDataFormat	= $point->mtfDataFormat;
$myRequired		= $point->mtfValueIsRequired;
$myRememberLast = $point->mtfRememberLastValue;
$myValue		= $point->mtfValue;
$metadatanames=$metadatanames.rawurlencode($myLabel).",,,,";
$required="";



if($myValue!=''){
	$myValue="value='".$myValue."'";
}

if(isset($_SESSION['FORMERRORS'])){
		$myValue="value='".$_SESSION['FORMERRORS'][$myLabel]['value']."'";

}
if($myRequired=='1'){
	$required='required=\"required\"';
}

	//
	// Generate form field depending on the metadata data type
	// TODO : extend for depended metadata
	// TODO : add validation class

switch($myDataType){
		case 'string':
					echo "<tr><td class='metadatalabel' rowspan='2'> <label class='inputLabel' for='field{$index}'>{$myLabel}</label></td>".
					"<td class='metadatavalue'><input name='metadata_field_".rawurlencode($myLabel)."' class='inputtxt' maxlength='30' {$myValue}class='metainput'/>";
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error']);
					}; 
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error']);
					}; 
					echo"</td></tr>".
					"<tr><td class='description'>{$mydescription}</td></tr>";
					break;

		case 'password' :
					echo "<tr><td class='metadatalabel' rowspan='2'> <label class='inputLabel' for='field{$index}'>{$myLabel}</label></td>".
					"<td class='metadatavalue'><input name='metadata_field_".rawurlencode($myLabel)."' class='inputtxt'maxlength='30' class='metainput'/>
					";
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error']);
					}; 
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error']);
					}; 
					echo"
					</tr>".
					"<tr><td class='description'>{$mydescription}</td></tr>";
					break;
		case 'date' :
		echo "<tr><td class='metadatalabel' rowspan='2'> <label class='inputLabel' for='field{$index}'>{$myLabel}</label></td>".
					"<td class='metadatavalue'><input name='metadata_field_".rawurlencode($myLabel)."' class='inputtxt' maxlength='30' {$myValue}class='metainput'/>
					";
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error']);
					}; 
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error']);
					}; 
					echo"
					</tr>".
					"<tr><td class='description'>{$mydescription}</td></tr>";
					
		break;
		
		case 'number' :
							echo"<tr><td class='metadatalabel' rowspan='2'>  <label class='inputLabel' for='field{$index}'>{$myLabel}</label></td>".
							"<td class='metadatavalue'><input {$myValue} name='metadata_field_".rawurlencode($myLabel).
							"' class='inputtxt' maxlength='30' class='metainput'/>
							";
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error']);
					}; 
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error']);
					}; 
					echo"".
							"<tr><td class='description'>{$mydescription}</td></tr>";
		break;
		case 'time' :
		echo 	"<tr><td class='metadatalabel' rowspan='2'> <label class='inputLabel' for='field{$index}'>{$myLabel}</label></td>".
				"<td class='metadatavalue'><input {$myValue} name='metadata_field_".rawurlencode($myLabel)."' type='{$myDataType}' class='inputtxt' maxlength='30' class='metainput'/>";
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['val_error']);
					}; 
					if(isset($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error'])){ 
					print_r($_SESSION['FORMERRORS'][rawurlencode($myLabel)]['type_error']);
					}; 
					echo
				"<tr><td class='description'>{$mydescription}</td></tr>";
		break;
		case 'bool' :
		echo 	"<tr><td class='metadatalabel' rowspan='2'> <label class='inputLabel' for='field{$index}'>{$myLabel}</label></td>".
				"<td class='metadatavalue'><select name='metadata_field_".rawurlencode($myLabel)."'>
				<option value='1'>Yes</option>
				<option value='0'>No</option>

				</select>

				</td></tr>".
				"<tr><td class='description'>{$mydescription}</td></tr>";
		break;
}

	//
	// for datatype = dropdown
	//
$pattern = '/^enum/';

if(preg_match($pattern, $myDataType)){
	echo"<tr><td class='metadatalabel' rowspan='2'><label class='inputLabel' for='field{$index}'>{$myLabel}</label></td>".
	"<td class='metadatavalue'><select name='metadata_field_".rawurlencode($myLabel)."'>";
	$shrink=str_replace("enum:","", $myDataType);

	$optionArr=explode("\n",$shrink);
	foreach ($optionArr as $key => $value) {
	echo"<option>{$value}</option>";
	}
	echo"</select></td></tr><tr><td class='description'>{$mydescription}</td></tr>";
	}
}
 ?>

	<tr>
		<td colspan="0">
    		<input type="hidden" name="hiddenSubmit" value="1"/>
    		<input type="hidden" name="point" value="<?php echo $pointselector ?>" id="pointselector"/>
		</td>
	</tr>
	<tr>
		<td class='metadatalabel'><?php echo PICKFILE ?></td>
    	<td><input type="file" name="file" required="required"/></td>
	</tr>
	<tr>
		<td colspan="0">
			<input type='submit' class='submitbutton' value='<?php echo SUBMITBUTTON ?>' />
			<input type='hidden' value='<?php echo $metadatanames ?>' name='metadatas_names' />
            <input type='hidden' value='<?php echo $p ?>' name='key' />
		</td>
	</tr>
	
</table>
</form>

<?php
	}

	//
	// retrieves all metadata

function getMetadata($retflowid,$retspid){

	global $session;
	$metadataArr;
	$spArr=$_SESSION['submitPoints'];
	foreach ($spArr as $index => $point) {
		if($point->spId == $retspid && $point->flowId == $retflowid){
		$metadataArr=$point->spData;
		}
	}
	
	return $metadataArr;
	}
}
$metadataform= new submitMetadata;
?>
