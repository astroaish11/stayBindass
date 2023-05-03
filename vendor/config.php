<?php
session_start();

// Session
define('SESSION', 'staybindassVendor');
define('LOGO','https://staybindass.com/img/logo.png');
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

date_default_timezone_set('Asia/Kolkata');

// Cache Clear Code
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('WEBLINK', 'https://staybindass.com/');
define('MAINLINK', 'https://staybindass.com/vendor/');

// SMTP Details
// define('HOST', 'smtp.gmail.com');
// define('PORT', '587');
// define('USERNAME', 'hitesh@apachiweb.co.in');
// define('PASSWORD', '7045444707');
// define('FROM', 'hitesh@apachiweb.co.in');
// define('FROMNAME', 'DMS');

// Other
// define('ADMINMAIL', '');

include('DB.class.php');
// include('Classes/class.phpmailer.php');
// include('email/sendEmail.php');

?>