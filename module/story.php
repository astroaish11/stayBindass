<?php 


//Policies

$ourstory_json = 'json/ourstory/ourstory.json';

if(file_exists($ourstory_json))
{
    $data = file_get_contents($ourstory_json);   
    $ourstory_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



?>