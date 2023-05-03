<?php
//session_start();
include('config.php');

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

?>