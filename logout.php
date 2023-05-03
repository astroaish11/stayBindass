<?php

include('config.php');

if(isset($_SESSION[SESSION]))
  unset($_SESSION[SESSION]);
   
echo '<script>window.location.href="'.WEBLINK.'";</script>';

?>
