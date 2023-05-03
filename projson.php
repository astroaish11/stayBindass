<?php
//include('config.php');


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');


$approveProperty = 'json/approveProperty/approveProperty.json';

if(file_exists($approveProperty))
{
    $data = file_get_contents($approveProperty);   
    $approveProperty_data = json_decode($data);  

    print_r($data);

}    

?>