<?php 


//Policies

$static_json = 'json/static_pages/static_pages.json';

if(file_exists($static_json))
{
    $data = file_get_contents($static_json);   
    $static_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



?>