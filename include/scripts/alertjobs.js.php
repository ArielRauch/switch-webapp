<?php
header("content-type: application/x-javascript"); 
include("../../settings/settings.php");
?>

$(document).ready(function() {
	 $('.refresh').click(function(event){
     	$("#submit_or_checkpoint_list").html("<img src='images/ajax-loader.gif' />");
		
		$('#submit_or_checkpoint_list').load("include/alertjobslist.php?refresh=1",function(){
		
		});
		
		$('#submit_or_checkpoint_metadata').html("");
 	});
    $('.checkpointfile').click(function(event){
		$(".refresh").html("<img src='images/ajax-loader.gif' />");
     	$('#submit_or_checkpoint_metadata').load("include/checkpoint.push.php?sp="+$(this).attr('name') + "&flowid=" + $(this).data('flow-id') + "&chkid=" + $(this).data('checkpoint-id') ,function() {
     		$(".refresh").html("<img src='images/refresh.png'/>");
		});
	});       
});


