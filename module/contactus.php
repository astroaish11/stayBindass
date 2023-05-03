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


//Social Media

$social_json = 'json/social_links/social_links.json';

if(file_exists($social_json))
{
    $data = file_get_contents($social_json);   
    $social_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}


?>