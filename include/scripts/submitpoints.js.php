<?php
header("content-type: application/x-javascript"); 
include("../../settings/settings.php");
include(ROOT."/include/web.session.php");
?>

$(document).ready(function() {
    <?php
		if(count($_SESSION['submitPoints'])==1){
			echo "$('#submit_or_checkpoint_metadata').load('include/submit.metadata.php".
				"?sp={$_SESSION['submitPoints'][0]->spId}::{$_SESSION['submitPoints'][0]->flowId}&p=0')";
		}
	?> 
    $('.refresh').click(function(event) {
     	$("#submit_or_checkpoint_list").html("<img src='images/ajax-loader.gif' />");
		$('#submit_or_checkpoint_list').load("include/submitpointlist.php?refresh=1$clicked=yes");	
	    $('#submit_or_checkpoint_metadata').html("");
	});

	$('.submitpointlist').click(function(event){
		$('#submit_or_checkpoint_metadata').load("include/submit.metadata.php?sp="+$(this).attr('name')+"&p="+$(this).attr('id')+'&clicked=yes');
	});
});

function removeandaddhandlers(){
	$.when(removehandlers()).then(addhandlers());
}
