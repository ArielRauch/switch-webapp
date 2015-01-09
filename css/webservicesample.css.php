<?php
header("Content-Type: text/css");
include("../settings/settings.php");
?>

/*
	The structure of this file: two big parts, one for the login window on the start page,
	one for the workspace.
	
	Every (group of) css defintion(s) is preceded by a comment to what part of the
	page it applies. When it concerns a constant, that constant is mentioned making
	it easy to locate what you want to change.
*/

/* 	====================================
	PART 1
	LOGINWINDOW
	====================================
*/

/* 	Size and position of the login window
	Tip: to center objects, use left 50% and margin-left=50% of width
*/

/* #loginwindow is the id of the div in loginwindow.php */

#loginwindow{
	position:relative;
	font-family:"<?php echo FONT ?>", Arial, Helvetica, sans-serif;
    border:1px solid <?php echo MAINCOLOR ?>;
    margin-right:15px;
}

/* the user name and login labels and fields are presented in a table */

#loginwindow table{
	width:100%;
	border-collapse:collapse;
	border-spacing: 0;

}

/* LOGINTITLE */

#loginwindow table tr th{
	padding:3px;
	width:100%;
	font-size:<?php echo LARGEFONTSIZE ?>;
	color:<?php echo MAINCOLOR ?>;
	text-align:center;
    margin-bottom:5px;
}

/* LOGINUSER and LOGINPWD, label and input field */

#loginwindow label {
	color:<?php echo MAINCOLOR ?>;
}

.loginlabel {
	text-align:right;
	padding:3px;
	width:50%;
}

.logininput {
	text-align:left;
	padding:3px;
	width:50%;
}

/* LOGINUSERHELP */
#loginwindow table tr td input[type="text"] {
	text-align:left;
	background-color:#fff;
	padding:3px;
	border:1px solid <?php echo MAINCOLOR ?>;
}

/* LOGINPWDHELP */
#loginwindow input[type="password"]
{
	background-color:#fff;
	padding:3px;
	border:1px solid <?php echo MAINCOLOR ?>;
}

/* LOGINBUTTON and TOWORKSPACE */
#loginwindow input[type="submit"]
{
	text-align:center;
	width:157px;
	border:0px;
	background-color:<?php echo MAINCOLOR ?>;
	color:<?php echo SUPPORTCOLOR1 ?>;
	padding:3px;
}

#loginwindow input[type="submit"]:hover
{
	background-color:<?php echo SUPPORTCOLOR2 ?>;
	color:<?php echo MAINCOLOR ?>;
	padding:3px;
}

.loginbutton {
	width:50%;
	text-align:center;
	margin-left:3px;
        margin-bottom:5px;

}

/* WELCOMEMESSAGE */
.welcomemessage {
	margin:3px;
	color:<?php echo MAINCOLOR ?>;
	text-align:center;
}

/* LOGINFAILED and CONNECTIONFAILED */
.error {
	color:#F00;
	text-align:center;
}

/* 	====================================
	PART 2
	WORKSPACE
	====================================
*/


body{
	background-color:#DBDBDB;
	font-family:"<?php echo FONT ?>", Arial, Helvetica, sans-serif;
}


/* 	====================================
	PART 2.1
	WORKSPACE - USER MENU
	====================================
*/

/* list of SUBMITPOINTS, CHECKPOINTS, MESSAGES, LOGOUTBUTTON/HOMEBUTTON */
#usermenu ul{
	position:relative;
	z-index:5;
	list-style: none;
	margin-top:5px;
	height:29px;
	background-color:<?php echo MAINCOLOR ?>;
}

#usermenu ul li {
	float:left;
	display:block;
	color:<?php echo SUPPORTCOLOR1 ?>FFF;
	line-height:25px;
    padding:2px;
    padding-right:5px;
    padding-left:5px;
}

#usermenu ul li:hover {
	background-color:<?php echo SUPPORTCOLOR2 ?>;
	color:<?php echo MAINCOLOR ?>;
	cursor:pointer;
}

/* image showing activity during the loading of submit points and checkpoints */
#usermenu .loaderimg{
	background-color:#FFF;
	border:none;
    position:absolute;
    left:0px;
    top:0px;
    z-index:50;
    height:29px;
	background-image:url(../images/ajax-loader.gif);
	background-repeat:no-repeat;
	background-position:center;
    width:100%;
    opacity: .5;
 	display:none;
}

/* 	====================================
	PART 2.2
	WORKSPACE - SUBMIT LIST
	====================================
*/

#submit_or_checkpoint_list {
	height:auto;
}

/* the unnumbered list of checkpoints */
/* SUBMITPOINTLISTWIDTH */
.submitpointlist {
	position:relative;
	width:<?php echo SUBMITPOINTLISTWIDTH ?>;
	list-style: none;
}

/* refresh button at the top of the list */
#submit_or_checkpoint_list ul {
	list-style-type: none;
	padding-left:3px;
	padding-right:50px;
}

.refresh {
	width:20px;
	height:20px;
	border:none;
}

.refresh:hover {
	color:<?php echo MAINCOLOR?>;
	background-color:<?php echo SUPPORTCOLOR2 ?>;
}

/* names of the submit points */
#submit_or_checkpoint_list ul li {
	border:1px solid <?php echo MAINCOLOR ?>;
	background-color:#fff;
	margin-top:10px;
	padding:5px;
	color:<?php echo MAINCOLOR?>;
}

#submit_or_checkpoint_list ul li:hover {
	background-color:<?php echo SUPPORTCOLOR2 ?>;
	cursor:pointer;
}

/* 	====================================
	PART 2.3
	WORKSPACE - CHECKPOINT LIST
	====================================
*/

/* the unnumbered list of checkpoints */
/* CHECKPOINTLISTWIDTH */
.checkpointlist {
	position:relative;
	width:<?php echo CHECKPOINTLISTWIDTH ?>;
	padding-right:25px;
}

.checkpointname {
	font-size:<?php echo NORMALFONTSIZE ?>;
	border:1px solid <?php echo MAINCOLOR ?>;
	text-align:center;
	padding:3px;
	margin-left:25px;
}

/* one line of the checkpoint list */
#submit_or_checkpoint_list tr.checkpointlistitem {
	font-size:<?php echo SMALLFONTSIZE ?>;
}

/* the name of the job in the checkpoint */
#submit_or_checkpoint_list td.checkpointfile {
	width:65%;
	text-align:left;
}

/* the date of the job in the checkpoint */
#submit_or_checkpoint_list td.checkpointwaittime {
	width:34%;
	text-align:right;
}

#submit_or_checkpoint_list table tr.evenmessage:hover{
	background-color:<?php echo SUPPORTCOLOR2 ?>;
	cursor:pointer;
}

#submit_or_checkpoint_list table tr.oddmessage:hover{
	background-color:<?php echo SUPPORTCOLOR2 ?>;
	cursor:pointer;
}

/* 	====================================
	PART 2.4
	WORKSPACE - MESSAGES LIST
	====================================
*/

#messagestable {
	position:relative;
	width:<?php echo MESSAGELISTWIDTH ?>;
}

tr.evenmessage {
	font-size:<?php echo SMALLFONTSIZE ?>;
}

tr.oddmessage {
	font-size:<?php echo SMALLFONTSIZE ?>;
	background:#E6E6E6;
}

.messagecol1 {
	width:20%;
	display:inline-block;
}

.messagecol2 {
	width:20%;
	display:inline-block;
}

.messagecol3 {
	width:55%;
	display:inline-block;
	overflow:hidden;
}


/* 	======================================
	PART 2.5
	WORKSPACE - METADATA AREA SUBMIT POINT
	======================================
*/

/* the table in which the metadata is shown */

.metadatatable {
	position:relative;
	width:<?php echo SUBMITMETADATAWIDTH ?>;
	margin-top:30px;
	padding-left:5px;
	border-left:1px solid <?php echo MAINCOLOR ?>;
}

/* the name of the submit point at the top */
#submit_or_checkpoint_metadata table tr th{
	padding-top:20px;
	color :<?php echo MAINCOLOR ?>;
	font-size:<?php echo LARGEFONTSIZE ?>;
	border-bottom: 1px solid <?php echo MAINCOLOR ?>;
}

/* FILLMETADATA */
#submit_or_checkpoint_metadata table tr td h3{
	color :<?php echo MAINCOLOR ?>;
	font-size:<?php echo NORMALFONTSIZE ?>;
	padding-top:15px;
}

/* metadatalabel */
#submit_or_checkpoint_metadata table tr td.metadatalabel {
	padding-left:5px;
	padding-right:5px;
	background-color:<?php echo MAINCOLOR ?>;
	color:<?php echo SUPPORTCOLOR1 ?>;
	width:50%;
}

/* metadatavalue line */
#submit_or_checkpoint_metadata table tr td.metadatavalue {
	background-color:<?php echo SUPPORTCOLOR1 ?>;
	color:<?php echo MAINCOLOR?>;
	width:50%;
}

/* metadata text input */
.inputtxt {
	font-size:<?php echo NORMALFONTSIZE ?>;
}

/* drop down list of metadata */
select {
	font-size:<?php echo NORMALFONTSIZE ?>;
	width:100%;
}

/* description of the metadata value */
#submit_or_checkpoint_metadata table tr td.description {
	padding:3px;
	font-size:<?php echo SMALLFONTSIZE ?>;
}

/* NOMETADATA */
#submit_or_checkpoint_metadata table tr td.nometadata {
	border-top:20px solid #f7f7f7;
	padding:3px;
	color:<?php echo MAINCOLOR ?>;
	font-size:<?php echo LARGEFONTSIZE ?>;
}

/* SUBMITBUTTON */
#submit_or_checkpoint_metadata input[type="submit"]
{
	border:1px solid <?php echo MAINCOLOR ?>;
	color:<?php echo MAINCOLOR ?>;
	background-color:#fff;
	padding:3px;
	width:100%;
	text-align:center;
	margin-top:20px;
	margin-left:3px;
	font-size:<?php echo LARGEFONTSIZE ?>;
}

#submit_or_checkpoint_metadata input[type="submit"]:hover
{
	background-color:<?php echo SUPPORTCOLOR2 ?>;
	color:<?php echo MAINCOLOR ?>;
	padding:3px;
}

/* 	====================================
	PART 2.6
	WORKSPACE - METADATA AREA CHECKPOINT
	====================================
*/

#checkpoint_metadata_area {
	position:relative;
	width:<?php echo CHECKPOINTMETADATAWIDTH ?>;
	margin-top:50px;
	padding-left:25px;
	border-left:1px solid <?php echo MAINCOLOR ?>;
}

/* preview image of the checkpoint file */
#checkpoint_metadata_area .checkpointimage {
	display:block;
}

/* 	====================================
	PART 2.7
	WORKSPACE - INFOBOX
	====================================
*/
#infoboxdiv {
	z-index:99;
	position:fixed;
	<?php echo MESSAGESALIGN ?>:0px
}

#infobox li{
	border:1px solid #000;
	width:200px;
	background-color:<?php echo SUPPORTCOLOR1?>;
	color:<?php echo MAINCOLOR?>;
	margin:3px;
	padding:3px;
	background-image:url(../images/close.gif);
	background-repeat:no-repeat;
	background-position:right top;
	opacity:0.4;	
}

#infobox li:last-child{
	opacity:1;
}
