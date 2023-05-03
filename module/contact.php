<?php 


//Contact

$contact_json = 'json/contact_us/contact_us.json';

if(file_exists($contact_json))
{
    $data = file_get_contents($contact_json);   
    $contact_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



?>