<?php 


//Policies

$onlinepay_json = 'json/onlinepayment/onlinepayment.json';

if(file_exists($onlinepay_json))
{
    $data = file_get_contents($onlinepay_json);   
    $onlinepay_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



?>