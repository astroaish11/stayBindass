<?php 

//Your Property

$your_property_json = 'json/your_property/your_property.json';

if(file_exists($your_property_json))
{
    $data = file_get_contents($your_property_json); //data read from json file

    //print_r($data);
    
    $your_property_data = json_decode($data);  //decode a data

    //print_r($users); //array format data printing
     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}

// echo '<pre>';
// print_r($your_property_data);






//Bottom Banner

$bottombanner_json = 'json/bottombanner/bottombanner.json';

if(file_exists($bottombanner_json))
{
    $data = file_get_contents($bottombanner_json);
    $bottombanner_data = json_decode($data); 
 
     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



//filters

$filter_json = 'json/filters/filters.json';

if(file_exists($filter_json))
{
    $data = file_get_contents($filter_json); 
    $filter_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}


//masthead

$masthead_json = 'json/masthead/masthead.json';

if(file_exists($masthead_json))
{
    $data = file_get_contents($masthead_json);   
    $masthead_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



//hotel Services

$services_json = 'json/services/services.json';

if(file_exists($services_json))
{
    $data = file_get_contents($services_json);
    $services_data = json_decode($data); 
 
     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}


//SALE Property

$saleproperty = 'json/saleproperty/saleproperty.json';

if(file_exists($saleproperty))
{
    $data = file_get_contents($saleproperty);   
    $saleproperty_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}

//Approve Property

$approveProperty = 'json/approveProperty/approveProperty.json';

if(file_exists($approveProperty))
{
    $data = file_get_contents($approveProperty);   
    $approveProperty_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}



?>