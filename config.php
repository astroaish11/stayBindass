<?php
session_start();

// Session
define('SESSION', 'staybindass');

//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

date_default_timezone_set('Asia/Kolkata');

// Cache Clear Code
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

include('weblogin/DB.class.php');
include('functions.php');
include('json.php');

// REQUIRED MAIL
include('Classes/class.phpmailer.php');
include('email/sendEmail.php');

define('WEBLINK', 'https://staybindass.com/');
define('LOGO','https://staybindass.com/img/logo.png');

// SMTP Details
define('HOST', 'mail.staybindass.com');
define('PORT', '465');
define('USERNAME', 'noreply@staybindass.com');
define('PASSWORD', 'O,BL$2M7CmFz');
define('FROM', 'noreply@staybindass.com');
define('FROMNAME', 'StayBindass');

// SMTP SETTINGS
$host="mail.staybindass.com";
$port= 465;
$username="noreply@staybindass.com";
$password= "O,BL$2M7CmFz";
$from="noreply@staybindass.com";
$fromname="StayBindass";

// OTHER DETAILS
$logo = WEBLINK.'img/logo.png';
$adminmail = "sagvekar.akash1992@gmail.com";

?>