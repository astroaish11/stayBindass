<?php
//addproperty json

$addproperty_json = 'json/addproperty/addproperty.json';

if(file_exists($addproperty_json))
{
    $data = file_get_contents($addproperty_json);
    $addproperty_data = json_decode($data); 
 
     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}

?>
