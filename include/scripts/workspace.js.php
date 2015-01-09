<?php
header('Content-type: text/javascript');
include("../../settings/settings.php");
include(ROOT."/include/web.session.php");
?>
$(document).ready(function() {

<?php if(isset($_GET['page'])){
echo"loadpage({$_GET['page']});";
}
?>
		$(".loadmessages").bind('click',function(event){
   			 		window.location.replace("<?php echo SWITCHWORKSPACE;?>?page=3");

 		})
		
		$(".loadsubmitpoints").bind('click',function(event){
        	window.location.replace("<?php echo SWITCHWORKSPACE;?>?page=1");
		
 		})
		
		$(".loadcheckpoints").bind('click',function(event){
    	   window.location.replace("<?php echo SWITCHWORKSPACE;?>?page=2");
		})				

	
        $(".logoutbutton").click(function(){
	 		window.location.replace("include/logout.php");
	 	})		
        
        $(".homebutton").click(function(){
	 		window.location.replace("<?php echo STARTPAGE ?>");
	 	})	

});

function loadpage(page){
	if(page==1){
	<!-- load submit points is clicked -->
	
		$("#submit_or_checkpoint_list").css("visibility","hidden");
		$(".loadsubmitpoints").css("border-bottom","10px solid <?php echo SUPPORTCOLOR2 ?>");
		$(".loadcheckpoints").css("border-bottom","none");	
		$(".loadmessages").css("border-bottom","none");
		$('.loaderimg').css("display","inline");		
		$('#submit_or_checkpoint_list').html("");	 	
	
		thispage="<?php if(isset($_GET['page'])){echo $_GET['page']; }?>";
		thispoint="<?php if(isset($_GET['point'])){echo $_GET['point']; }?>";
		if(thispoint==""){ thispoint="aa";}
		
		$('#submit_or_checkpoint_list').load("include/submitpointlist.php",function(){
			$("#submit_or_checkpoint_list").css("visibility","visible");
			$('.loaderimg').css("display","none");	
			if(thispoint!="aa"){
				$('#submit_or_checkpoint_metadata').load("include/submit.metadata.php?sp="+thispoint+"&p=0");
			}	
		});
	}
	
	if(page==2){
		<!-- load checkpoints points is clicked -->

		refresh="<?php if(isset($_GET['refresh'])){echo $_GET['refresh']; }?>";
			$("#submit_or_checkpoint_list").css("visibility","hidden");
			$(".loadcheckpoints").css("border-bottom","10px solid <?php echo SUPPORTCOLOR2 ?>");
			$(".loadsubmitpoints").css("border-bottom","none");	
			$(".loadmessages").css("border-bottom","none");
			$('.loaderimg').css("display","inline");		
			$('#submit_or_checkpoint_list').html("");
			$("#submit_or_checkpoint_list").html("<img src='images/ajax-loader.gif' />");
		if(refresh=="1")
		{
		
			refresh="?refresh=1";
			$('#submit_or_checkpoint_list').load("include/alertjobslist.php"+refresh,function(){
			$("#submit_or_checkpoint_list").css("visibility","visible");
			$('.loaderimg').css("display","none");	
			});
		}
		else
		{
			$('#submit_or_checkpoint_list').load("include/alertjobslist.php",function(){
			$("#submit_or_checkpoint_list").css("visibility","visible");
			$('.loaderimg').css("display","none");	
			});
		}
		
	}
	if(page==3){
		<!-- load messages is clicked -->

		$(".loadmessages").css("border-bottom","10px solid <?php echo SUPPORTCOLOR2 ?>");
		$(".loadsubmitpoints").css("border-bottom","none");	
		$(".loadcheckpoints").css("border-bottom","none");
		$('.loaderimg').css("display","inline");		
		$('#submit_or_checkpoint_list').html("");
		$("#submit_or_checkpoint_list").html("<img src='images/ajax-loader.gif' />");
		$('#submit_or_checkpoint_list').load("include/messages.php", function() {
		$('.loaderimg').css("display","none");
        $("#submit_or_checkpoint_list").css("visibility","visible");
	});		
	}
}

function removeandaddhandlers(){
$.when(removehandlers()).then(addhandlers());
}
	
function loadsubmitpointsevent(){	

	$("#submit_or_checkpoint_list").css("visibility","hidden");
	
	$(".loadsubmitpoints").css("border-bottom","10px solid <?php echo SUPPORTCOLOR2 ?>");
	$(".loadcheckpoints").css("border-bottom","none");	
        $(".loadmessages").css("border-bottom","none");
	
	$('.loaderimg').css("display","inline");		
	$('#submit_or_checkpoint_list').html("");	 	
	$('#submit_or_checkpoint_list').load("include/submitpointlist.php?message=test&messagetype=info", function() {
	$('.loaderimg').css("display","none");	
    $("#submit_or_checkpoint_list").css("visibility","visible");

  	
  
	$('#submit_or_checkpoint_metadata').html("");
	})
}

		
function loadcheckpointsevent(){
	$("#submit_or_checkpoint_list").css("visibility","hidden");
	$(".loadsubmitpoints").css("border-bottom","none");
    $(".loadmessages").css("border-bottom","none");

	$(".loadcheckpoints").css("border-bottom","10px solid <?php echo SUPPORTCOLOR2 ?>");			
	$('.loaderimg').css("display","inline");		
	$('#submit_or_checkpoint_list').html("");		
 	$('#submit_or_checkpoint_list').load("include/alertjobslist.php", function() {
		$('.loaderimg').css("display","none");
        $("#submit_or_checkpoint_list").css("visibility","visible");
	});				
	$('#submit_or_checkpoint_metadata').html("");	
}
function loadmessages(){
	$("#submit_or_checkpoint_list").css("visibility","hidden");
	$(".loadsubmitpoints").css("border-bottom","none");
    $(".loadcheckpoints").css("border-bottom","none");

	$(".loadmessages").css("border-bottom","10px solid <?php echo SUPPORTCOLOR2 ?>");			
	$('.loaderimg').css("display","inline");		
	$('#submit_or_checkpoint_list').html("");		
 	$('#submit_or_checkpoint_list').load("include/messages.php", function() {
		$('.loaderimg').css("display","none");
        $("#submit_or_checkpoint_list").css("visibility","visible");
	});				
	$('#submit_or_checkpoint_metadata').html("");	
}
		
function addhandlers(){
		$(".loadmessages").bind('click',function(event){
        	event.stopPropagation();
			loadmessages(event);			
 		})
		$(".loadsubmitpoints").bind('click',function(event){
        	event.stopPropagation();
			loadsubmitpointsevent(event);			
 		})
		$(".loadcheckpoints").bind('click',function(event){
    	    event.stopPropagation();
			loadcheckpointsevent(event);
		})				
}

function removehandlers(){
	$(".loadsubmitpoints").unbind('click')
	$(".loadcheckpoints").unbind('click')
}                
