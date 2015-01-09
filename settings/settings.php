<?php
/*     README
/*     ======
*/
/* This sample website has some options that can be changed. These options are stored in 'PHP constants'.  
/* FIRST :
/* Before changing any of the values it is recomended to make a copy of this file.
*/
/* MAKING CHANGES :
/* a php constant has 2 parts :
/* define("PART_ONE","PART_TWO")
/* - part one : this is the name of the constant and changing this wil break the sample
/* - part two : this is the value that can be changed
*/


//////////////////////////////// GENERAL SETTINGS/////////////////////////////////
// ROOT : 
//   The default value is $_SERVER["DOCUMENT_ROOT"], meaning the website is 
//   running in the root of the webserver.
//   IF the website is running in a subfolder change the value like this :
//   define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/subfolder/");
//////////////////////////////////////////////////////////////////////////////////

define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/switch/");   
define("STARTPAGE", "index.php");
define("SWITCHWORKSPACE", "switchworkspace.php");

//////////////////////////////// SWITCH SERVER ///////////////////////////////////
// SWITCHSERVER : IP address of Switch Server (can be localhost)			    
// SWITCHPORT   : PORT of Switch Server										    
// USER			: Username to connect to Server									
//                 - If Empty a login form will be shown asking the user to enter
//                    valid switch credentials.						
// PASS			: Password to connect to Server									
//				   - Can be left empty as Switch accepts empty passwords     	
//////////////////////////////////////////////////////////////////////////////////

define("SWITCHSERVER","81.218.153.16");
define("SWITCHPORT","51008");
define("USER","");
define("PASS","");

//////////////////////////////// TIME ZONE ///////////////////////////////////
// As of PHP5 it is required to specify the time zone when working with date
// variables. For the correct string to set the time zone refer to
// http://php.net/manual/en/timezones.php
//////////////////////////////////////////////////////////////////////////////////

define("TIMEZONE","Europe/Berlin");

//////////////////////////////// USER MENU ///////////////////////////////////////
// The user menu offers 3 menu items ( submitpoints, checkpoints, messages)     
// The value entered is the string shown in the menu			                
//																				
//									NOTE: 										
//  If you leave one of the constants empty, this menu item will not be shown   
//////////////////////////////////////////////////////////////////////////////////

define("SUBMITPOINTS","Submit points");	
define("CHECKPOINTS","Checkpoints");
define("SHOWCHECKPOINTNAMES","Always");	//Always, Never, OnlyWhenJobs
//Note that Messages will only be shown when the user belongs to the Administrator group
//in Switch.
define("MESSAGES","Messages");
define("SUBMITPOINTLISTWIDTH","200px");
define("SUBMITMETADATAWIDTH","600px");
define("CHECKPOINTLISTWIDTH","450px");
define("CHECKPOINTMETADATAWIDTH","400px");
define("MESSAGELISTWIDTH","900px");
define("MAXIMUMNUMBEROFMESSAGES","500");

/////////////////////////////////// INFOBOX  ///////////////////////////////////////
// This sets the number of info box messages that will be displayed
// Left or right determine whether the infobox will be displayed left of the
// main page or to the right of it.
//////////////////////////////////////////////////////////////////////////////////

define("MAXNUMBEROFINFOBOXMESSAGES","5");
define("MESSAGESALIGN","left"); //only left or right

//////////////////////////////// STRINGS ///////////////////////////////////////
//  These are the strings shown in the UI of the sample, to localize to another   
//  language simply change the values of the strings.
//																				
//	They are ordered by the php in which they are used.															
//  
//////////////////////////////////////////////////////////////////////////////////

//loginwindow.php
define("LOGINTITLE","Switch Web Services Login");			
define("LOGINUSER","Name");
define("LOGINPWD","Password");
define("LOGINUSERHELP","enter a Switch user name");
define("LOGINPWDHELP","enter the password");
define("LOGINBUTTON","Login");
define("LOGOUTBUTTON","Logout");
define("HOMEBUTTON","Back");
define("TOWORKSPACE","Continue");
define("WELCOMEMESSAGE","Welcome to our Switch Webservices PHP Sample website.");

//checkloginfromswitch.php
define("LOGINFAILED","Login failed");
define("LOGINSUCCES","Login succes");
define("CONNECTIONFAILED","Connection failed");

//submit.metadata.php
define("FILLMETADATA","Fill out the following form");
define("NOMETADATAREQUIRED","Nothing has to be filled in");
define("PICKFILE","Select a file to submit");
define("PICKFILEBUTTON","Choose a file or folder");
define("SUBMITBUTTON","Submit");
define("SUBMITPOINTSLOADED","submit points loaded");

//checkpoint.push.php
define("DOWNLOAD","Download");
define("CHOOSECONNECTION","Choose outgoing connection");
define("PUSHBUTTON","Push");
define("ALERTJOBSLOADED","alert joblist loaded");

//client.process.php
define("SUBMITINFOMESSAGE","successfully%20submitted");
define("SUBMITERRORMESSAGE","not%20submitted");

define("PUSHINFOMESSAGE","successfully%20pushed");
define("PUSHERRORMESSAGE","not%20pushed");


/////////////////////////// COLORS and FONTS ////////////////////////////////////
//  The sample uses 3 colors, and 1 font in 3 sizes.
//
//  All html color tags are valid (eg "white","#fff","ffffff").																			
//	It is necessary to include the hash (#) sign with hexacodes.
//
//	For font sizes both 'px' and 'em' is accepted.
//  
//////////////////////////////////////////////////////////////////////////////////
define("MAINCOLOR","#0273b9");
define("SUPPORTCOLOR1","#eee");
define("SUPPORTCOLOR2","#abca0c");

define("FONT","Trebuchet MS");
define("LARGEFONTSIZE","1.2em");
define("NORMALFONTSIZE","1em");
define("SMALLFONTSIZE","0.8em");
?>