$(document).ready(function() {
$('#infobox').delay(2000).fadeOut(2000);
	$('.infoboxitem').click(function(event){
	value=(this.id);
	value = value.replace("L", "");
   $('#infoboxmessages').load('include/infobox.php?remove='+value);	
	});
});