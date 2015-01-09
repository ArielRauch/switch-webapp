<?php
include("../settings/settings.php");
include(ROOT."/include/lib/SwitchClientService_v4.0.php");
include(ROOT."/include/web.session.php");
global $session;
if(isset($_GET['refresh'])){
	unset($_SESSION['allflows']);
	unset($_SESSION['jobsFromCheckpoint']);
}
if(!isset($_SESSION['allflows'])){
	$_SESSION['jobsFromCheckpoint']=array();
	$uname		= $_SESSION['SwUser'];
	$pass 		= $_SESSION['SwPass'];
	$IpandPort	= 'https://'.SWITCHSERVER.':'.SWITCHPORT;
	$client = new \switchclient\service($uname,$pass,$IpandPort);
	$allflows =$client->getAllCheckPoints();
	$_SESSION['allflows']=$allflows;
	$client->close();
	$jobsarray=array();
	$session->addinfoboxmessage(ALERTJOBSLOADED);
	echo"<script>
		$('#infobox').load('include/infobox.php');	
	</script>";
}
else{
	$allflows=	$_SESSION['allflows'];
	$jobsarray=$_SESSION['jobsFromCheckpoint'];
}
?>
<script language="javascript" src="include/scripts/alertjobs.js.php"> </script>
<ul>
<li class="refresh"><img src="images/refresh.png"/></li>
</ul>

<table class='checkpointlist'>
<?php
$even = true;
//First loop is over all flows
foreach ($allflows as $checkpoint => $checkpval) {
	if (empty($checkpval->ckpoints)) {
		$checkpval->ckpoints = array();
	}
	if (!\is_array($checkpval->ckpoints)) {
		$checkpval->ckpoints = array($checkpval->ckpoints);
	}

	$points= $checkpval->ckpoints;

	//Second loop is over all checkpoints of one flow
	foreach ($points as $key2 => $thischeckpoint) {
		if(!isset($jobsarray[$key2.$checkpoint]))
		{	$jobsarray[$key2.$checkpoint]=$client->getJobsFromCheckPoint($checkpval->flowid,$thischeckpoint->chkID);
			
		}
			
		if (!\is_array($jobsarray[$key2.$checkpoint]->jobInfos)) {
			$jobsarray[$key2.$checkpoint]->jobInfos = array($jobsarray[$key2.$checkpoint]->jobInfos);
		}
		$_SESSION['jobsFromCheckpoint']=$jobsarray;

		if (SHOWCHECKPOINTNAMES == "Always") {
			echo"<tr >";
				echo"<td class='checkpointname'>".$thischeckpoint->chName."</td>";
				echo"<td></td>";
			echo"</tr>";
		} elseif (SHOWCHECKPOINTNAMES == "OnlyWhenJobs") {
			if ($thischeckpoint->chJobCount > 0) {
				echo"<tr>";
					echo"<td class='checkpointname'>".$thischeckpoint->chName."</td>";
					echo"<td></td>";
					
				echo "</tr>";
			}
		}
		
		
		//Third loop is over all jobs of the checkpoint
		foreach ($jobsarray[$key2.$checkpoint]->jobInfos as $key3 => $value3) {
			if(isset($jobsarray[$key2.$checkpoint]->jobInfos[$key3])) {
				$name=$jobsarray[$key2.$checkpoint]->jobInfos[$key3]->jobInfo->jobName;
				$waittime=$jobsarray[$key2.$checkpoint]->jobInfos[$key3]->jobInfo->jobWaitingTime;
				$userwaittime=substr($waittime,0,strrpos($waittime,":"));
				
				if ($even == true) {
					$even = false;
				}
				else {
					$even = true;
				}
			
				if ($even == true) {
					echo"<tr class='evenmessage'>";
				}
				else {
					echo"<tr class='oddmessage'>";
				}
				echo"<td class='checkpointfile' name='{$value3->jobId}' data-flow-id=\"". $checkpval->flowid ."\" data-checkpoint-id=\"". $thischeckpoint->chkID ."\" >{$name}</td>";
				echo"<td class='checkpointwaittime'>{$userwaittime}";
				echo"</tr>";
			}
		} 	
	}	
}
?>
</table>
