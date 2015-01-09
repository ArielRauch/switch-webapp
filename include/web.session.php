<?php
//for more information open the readme.txt file in the root of the SDK



class Session{
/*==================================*\
 the Session Class takes care
 of everything related to user sessions 
\*==================================*/	
	var $url; 
   	var $referrer;
	var $loggedIn;
	
	
	function Session(){
			$this->startSession();								
		}
		
//starts session and sets referrer page		
	function startSession(){
			session_start();
			$this->loggedIn =$this->checkLogin();						
			if(isset($_SESSION['url'])){
	    	    $this->referrer = $_SESSION['url'];
	   		}
			else{
        		$this->referrer = "/";
     		}	  
			$this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];
			date_default_timezone_set(TIMEZONE);
		}	
		
//checks if logedin session variable is set		
	function checkLogin(){
			if(!isset($_SESSION['SwUser']) || !isset($_SESSION['SwPass'])){
				$_SESSION['LoggedIn']=false;
				return false;				
			}
			else{
				$_SESSION['LoggedIn']=true;
				return true;			
			}
		}
//Set user and password session variable
// NO VALIDATION IS DONE
	function login($uname,$upass){	
			$_SESSION['SwUser']=$uname;
			$_SESSION['SwPass']=$upass;
			$this->addinfoboxmessage(LOGINSUCCES);
			return 0;
		}
// if a default ip and port is set , session variables are created		
	function SetDefaultIPORT($ip,$port){	
			$_SESSION['DefaultIP']=$ip;
			$_SESSION['DefaultPORT']=$port;
			return 0;
		}
//destroys the current session = logout
	function logout(){
			session_destroy();
			return 0;
		}

    function addinfoboxmessage($message)
	{
	$_SESSION['newmessage']=1;
	$whatimeisit=date ( "G:i", time() );
	
	$message =$whatimeisit."</br>".$message;
	if(!isset($_SESSION['infoboxmessages']))
	{
	$_SESSION['infoboxmessages']=array();
	}
	if(count($_SESSION['infoboxmessages'])<MAXNUMBEROFINFOBOXMESSAGES){
	    $infoboxarray=array();
	    $infoboxarray=$_SESSION['infoboxmessages'];
	    array_push($infoboxarray, $message);
	    $_SESSION['infoboxmessages']=$infoboxarray;
	    return 1;
	}
	else
	{
	    $infoboxarray=array();
	    $infoboxarray=$_SESSION['infoboxmessages'];
		 $gone=array_shift($infoboxarray);
	    array_push($infoboxarray, $message);
	    $_SESSION['infoboxmessages']=$infoboxarray;
	    return 1;
	   
	
	}
	}
}//end Session Class

$session = new Session
?>