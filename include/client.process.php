<?php

include("../settings/settings.php");
include(ROOT."/include/lib/SwitchClientService_v4.0.php");
include(ROOT."/include/web.session.php");

/*==================================*\
 the ClientProcess Class takes care
 of all processes that are needed
 Switch Server side
\*==================================*/	


class Clientprocess{


	function Clientprocess(){
	global $session;
		if(isset($_POST['hiddenSubmit']))   //is called from submitform
		{
				$this->SubmitJob();	
		}
		if(isset($_POST['download']))   //download is called from checkpoint 
		{
				$this->download();	
		}
if(isset($_POST['hiddenPush']))  //is called from job push form
		{
			$this->pushJob();					
		}
		
	}

function pushJob()
	{
	global $session;	
	$uname		= $_SESSION['SwUser'];
	$pass 		= $_SESSION['SwPass'];
	$ip   		= SWITCHSERVER;
	$port 		= SWITCHPORT;
	$IpandPort	= 'https://'.$ip.':'.$port;
	$metas=$this->extractPushMetadatas();			//returns metadata array
    $id = $_POST['jobid'];
    $jobEncoded = $_POST['job'];
    $connectionId = $_POST['connectionId'];

    if (empty($id) || empty($jobEncoded) || empty($connectionId)) {
          header("Location: ../index.php$message='there was an error...'");
     }

    $job = \json_decode($jobEncoded);	
    $client = new \switchclient\service($uname,$pass,$IpandPort);
    $client->pushJobToConnection($connectionId, $job,$metas);
    $client->close();
	$job=get_object_vars($job);
    $jobname=$job['name'];
	$jobname=chunk_split($jobname,30,"</br>");
	$session->addinfoboxmessage( $jobname.PUSHINFOMESSAGE);
	header("Location: ../switchworkspace.php?page=2&refresh=1");    
	
	}	
	
	
/*==================================*\
            SubmitJob()
processes form input and
	creates Client instance to send
	the uploaded file to the Switch
	server
\*==================================*/	
function SubmitJob(){
		global $session;
		$pair= $_POST['point'];
		$ssp = \explode('::', $pair);
		$pointId = $ssp[0];
        $flowId = $ssp[1];
		$uname		= $_SESSION['SwUser'];
		$pass 		= $_SESSION['SwPass'];
		$ip   		= SWITCHSERVER;
		$port 		=SWITCHPORT;
		$IpandPort	= 'https://'.$ip.':'.$port;
		$fileData="";
		$metas=$this->extractMetadatas();
	
		 if (isSet($_FILES['file'])) {
            $fileData=$_FILES['file'];
         }
		 
		 else
		 {
			 header("Location: ../switchworkspace.php?message='no file selected'");
		 }
		 
	 		 
		$client = new \switchclient\Service($uname,$pass,$IpandPort);
		$submitThis=$client->submit($flowId, $pointId, $fileData['tmp_name'], $fileData['name'],$metas);
	

		if($submitThis==1){
			$filename=$_FILES['file']['name'];
			
	$filename=chunk_split($filename, 32,"</br>");
	$session->addinfoboxmessage( $filename.SUBMITINFOMESSAGE);
			
			header("Location: ../switchworkspace.php?page=1&point={$pair}");
		}
		else
		{
			$filename=$_FILES['file']['name'];
			$session->addinfoboxmessage($filename."%20".SUBMITERRORMESSAGE);
			header("Location: ../switchworkspace.php?point={$pair}");
		}
	}
	
/*==================================*\
            extractMetadatas()
Help function for SubmitJob() function.
\*==================================*/		
	
	function extractMetadatas() {
        $metadataNames = $_POST['metadatas_names'];
        $metadatas = array();
        if ($metadataNames == null) {
            $metadataNames = array();
        } else {
            $metadataNames = explode(',,,,', trim($metadataNames, ','));
        }
		if(count($metadataNames)!=1){
        foreach ($metadataNames as $name) {
            $metadatas[urldecode($name)] = $_POST['metadata_field_'.$name];
        }
		}
		else if(count($metadataNames)==1){
		if	($metadataNames[0]!='')
		{
			foreach ($metadataNames as $name) {
            $metadatas[urldecode($name)] = $_POST['metadata_field_'.$name];
        }}
		
		}
        return $metadatas;
    }
	
/*==================================*\
            extractPushMetadatas()
Help function for pushjob() function.
\*==================================*/		
	
	function extractPushMetadatas()
	{
		$metadataNames = $_POST['metadatas_names'];
	

        $metadatas = array();
        if ($metadataNames == null) {
            $metadataNames = array();
        } else {
            $metadataNames = explode(',,,,', trim($metadataNames, ','));
        }
		if(count($metadataNames)!=1){
			$i=0;
        foreach ($metadataNames as $name) {
            $metadatas[$i] = $_POST['metadata_field_'.$name];
			$i++;
        }
		}
		else if(count($metadataNames)==1){
			
			$metadatas[0]=$_POST['metadata_field_'.$metadataNames[0]];
			
		
		
		}
        return $metadatas;
	}
	
/*==================================*\
            download()
downloads job from checkpoint
\*==================================*/		
		
	public function download() {


		$uname		= $_SESSION['SwUser'];
		$pass 		= $_SESSION['SwPass'];
		$ip   		= SWITCHSERVER;
		$port 		=SWITCHPORT;
		$IpandPort	= 'https://'.$ip.':'.$port;
	
		
		
        $id = $_POST['jobid'];
        $jobEncoded = $_POST['job'];
	
        if (empty($id) || empty($jobEncoded)) {
            header("Location: ../index.php?message=Can't find requested job or connection.");
        }

        $job = json_decode($jobEncoded);

        $filePathToDownload = null;
        $client = new \switchclient\service($uname,$pass,$IpandPort);;
        try {
            $filePathToDownload = $client->download($job);

        } catch (\Exception $e) {
            $logger = \switchclient\Logger::getLogger();
            $logger->error(print_r($e, true));
            $logger->error(print_r($client, true));

            $this->redirect('index', 'index', array('message' => "Can't download requested job. See logs for details."));
        }
        $client->close();

        if ($filePathToDownload == null) {
            $this->redirect('index', 'index', array('message' => "Can't download requested job. See logs for details."));
            return;
        }
		$retFile = str_replace(" ","_",$job->name);
        // send headers and read file to browser.
        \header('Content-Description: File Transfer');
        \header('Content-Type: application/octet-stream');
        \header('Content-Disposition: attachment; filename=' . $retFile);
        \header('Content-Transfer-Encoding: binary');
        \header('Expires: 0');
        \header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        \header('Pragma: public');
        \header('Content-Length: ' . \filesize($filePathToDownload));
        \ob_clean();
        \flush();
        \readfile($filePathToDownload);
        \unlink($filePathToDownload);
        
        exit();
    }
	
}
$client = new Clientprocess;

?>