<?php 
$query ='';
$CurPageURL ='';
$cityname = '';
$cityid = 0;
$tstart = '';
$tend = '';

if(isset($_GET['cityname'])) {
    $cityname = $_GET['cityname'];  
}

if(isset($_GET['cityid'])) {
   $cityid = $_GET['cityid'];
}

if(isset($_GET['t-start'])) {
   $checkin = $_GET['t-start']; 
}else{
   $checkin = ''; 
}

if(isset($_GET['t-end'])) {
   $checkout = $_GET['t-end']; 
}else{
   $checkout = ''; 
}

if($checkin != ''){
   $tstartnew = date('m-d-Y', strtotime($checkin));
}

if($checkout != ''){
   $tendnew = date('m-d-Y', strtotime($checkout));
}

if(isset($_GET['adults'])) {
   $adults = $_GET['adults']; 
}else{
   $adults = 2;
}

if(isset($_GET['childs'])) {
   $childs = $_GET['childs']; 
}else{
   $childs = 1;
}


if(isset($_GET['rooms'])) {
   $rooms = $_GET['rooms']; 
}else{
   $rooms = 1;
}

if(isset($_GET['property'])) {
   $destination_name = $_GET['property']; 
}else{
   $destination_name = '';
}

if(isset($_GET['destination_id'])) {
   $destination_id = $_GET['destination_id']; 
}else{
   $destination_id = 0;
}


if(isset($_GET['cityname'])) {

    if(isset($_SESSION[SESSION])){
        $loginuserid = $_SESSION[SESSION]['loginuserid'];
    }else{
        $loginuserid = 0;
    }
    
    $cdate = date('Y-m-d H:i:s');

    //mysqli_query($sql, "INSERT INTO `awt_property_search` (`userid`, `cityname`, `cityid`, `from_date`, `to_date`, `adults`, `children`, `rooms`, `created_date`, `created_by`) VALUES ('$loginuserid', '$cityname', '$cityid', '$tstart', '$tend', '$adults', '$childs', '$rooms', '$cdate', '$loginuserid')");


}

// $currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
// $url_components = parse_url($currentPageUrl);
// parse_str($url_components['query'], $params);

function citySearchListing($sql){

    $queryCity = mysqli_query($sql,"SELECT c.id, c.city, s.name as state FROM `city_master` as c LEFT JOIN `awt_states` as s ON c.`state` = s.`id` WHERE `deleted` != 1");

    while($listdataCity = mysqli_fetch_object($queryCity)){

        echo '<div class="clickcity" data-cityid="'.$listdataCity->id.'" data-cityname="'.$listdataCity->city.'">
                  <a class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                    <div class="d-flex">
                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                      <div class="ml-10">
                        <div class="text-15 lh-12 fw-500 js-search-option-target searchcity">'.$listdataCity->city.', '.ucfirst(strtolower($listdataCity->state)).'</div>
                        <!--<div class="text-14 lh-12 text-light-1 mt-5 searchstate">'.ucfirst(strtolower($listdataCity->state)).'</div>-->
                      </div>
                    </div>
                  </a>
                </div>';

    }

}

function citySearchAutocompleteListing($sql){

    $queryCity = mysqli_query($sql,"SELECT c.id, c.city, s.name as state FROM `city_master` as c LEFT JOIN `awt_states` as s ON c.`state` = s.`id` WHERE `deleted` != 1");

    while($listdataCity = mysqli_fetch_object($queryCity)){

        echo '{
                cityid: "'.$listdataCity->id.'",
                city: "'.$listdataCity->city.', '.ucfirst(strtolower($listdataCity->state)).'",
                state: "'.ucfirst(strtolower($listdataCity->state)).'"
              },';

    }

}

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


//Destination

$destination_json = 'json/destination_master/destination_master.json';

if(file_exists($destination_json))
{
    $data = file_get_contents($destination_json);
    $destination_data = json_decode($data);  

     $message = "<h3 class='text-success'>JSON file data</h3>";

}else{

     $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}

?>