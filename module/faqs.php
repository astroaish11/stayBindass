<?php 


//FAQ Cat

$faqcat_json = 'json/faqcat/faqcat.json';

if(file_exists($faqcat_json))
{
    $data = file_get_contents($faqcat_json);   
    $faqcat_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}

//FAQ Master

$faqmaster_json = 'json/faqmaster/faqmaster.json';

if(file_exists($faqmaster_json))
{
    $data = file_get_contents($faqmaster_json);   
    $faqmaster_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}


?>