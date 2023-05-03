<?php 

$price = '';
$checkin =  '';
$checkout =  '';
$adults = '';
$children = '';
$room = '';
$cdate = date("Y-m-d H:i:s");





if(isset($_GET['slug'])){

     $urlslug = trim($_GET['slug']);
     $urlslug =mysqli_real_escape_string($sql,$urlslug);

     // $getvideo = "SELECT ap.*, v.video from `addproperty` as ap left join `awt_Video` as v on v.v_id=ap.id where slug='$urlslug' and ap.deleted !='1' and v.deleted !='1'";
     // $queryvideo = mysqli_query($sql, $getvideo);
     // $countvideo = mysqli_num_rows($queryvideo);
  

     $getgallery = "SELECT ap.*,v.logo from `addproperty` as ap left join `awt_vgallery` as v on v.v_id=ap.id where slug='$urlslug' and ap.deleted !='1' and v.deleted !='1' limit 6";
    
     $query11= mysqli_query($sql, $getgallery);
     $count12 = mysqli_num_rows($query11);

 
     $querygal= mysqli_query($sql, "SELECT ap.*,v.logo from `addproperty` as ap left join `awt_vgallery` as v on v.v_id=ap.id where slug='$urlslug' and ap.deleted !='1' and v.deleted !='1'");  

     $countgal = mysqli_num_rows($querygal);


    
     $getvillaQue =  "SELECT ap.*,v.question as villaquestions, v.answer as villaanswers from `addproperty` as ap left join `awt_villafaq` as v on v.v_id=ap.id where slug='$urlslug'";

   
     $queryvillaQue = mysqli_query($sql,"SELECT v.question as villaquestions, v.answer as villaanswers from `addproperty` as ap left join `awt_villafaq` as v on v.v_id=ap.id where slug='$urlslug'");
     $countvillaQues = mysqli_num_rows($queryvillaQue);
   


     $getpropertydetail = "SELECT a.*,am.*,p.pool as pooltype,c.city as cityname,s.name as statename,r.room as bedroom , n.night, h.home as bathroom,vf.question as question,vf.answer as answer from `addproperty` as a 
     left join `city_master` as c on c.id=a.city
     left join `pool_master` as p on p.id=a.pool
     left join `awt_states` as s on s.id=a.state 
     left join `room_master` as r on r.id=a.r_type  
     left join `night_master` as n on n.id=a.nights 
     left join `home_master` as h on h.id=a.h_type  
     left join `awt_villafaq` as vf on vf.v_id=a.id 
     left join `awt_meal` as am on am.v_id=a.id
     where a.slug='$urlslug' and a.deleted !='1' and a.adminApproval = '1' and a.villaStatus!='1'";

     $selectdata = mysqli_query($sql,$getpropertydetail);
     $getvillaQuestions = mysqli_query($sql,$getpropertydetail);

     $property_count = mysqli_num_rows($selectdata);
     if($property_count>0){

     $getdata = mysqli_fetch_object($selectdata);

     $title = $getdata->title;
     $state = $getdata->statename;
     $city = $getdata->cityname;
     $bedroom = $getdata->bedroom;
     $bathroom = $getdata->bathroom;
     $pool = $getdata->pooltype;
     $logo = $getdata->logo;
     $guestmin = $getdata->minguest;
     $night = $getdata->night;
     $guestmax = $getdata->maxguest;
     $adult1 = $getdata->adult1;
     $child1 = $getdata->child1;
     $adult2 = $getdata->adult2;
     $child2 = $getdata->child2;
     $adult3 = $getdata->adult3;
     $child3 = $getdata->child3;
     $adult4 = $getdata->adult4;
     $child4 = $getdata->child4;
     $short_desc = $getdata->short_desc;
     $upload_image = $getdata->upload_image;
     $question = $getdata->question;
     $answer = $getdata->answer;
     $propcat = $getdata->propcat;
     $destination = $getdata->destination;
     $shortdesc = $getdata->shortdesc;
     $amenities = $getdata->amenities;
     $overview = $getdata->overview;
     $specification = $getdata->specification;
     $location_link = $getdata->location_link;
     $video_link = $getdata->video_link;
     $rules = $getdata->rules;
     $security = $getdata->security;
     $policies = $getdata->policies;
     $uploadimage = $getdata->uploadimage;
     $image = $uploadimage;
     $service_charge = $getdata->service_charge;
     $eid = $getdata->id;
     }
     else{
          echo "<script type='text/javascript'>window.location.href = 'https://staybindass.com/404'</script>";
     }

     $today = date('Y-m-d');

     $query22 = mysqli_query($sql,"SELECT * FROM `awt_property_price` where `select_date` = '$today' and `property_id` = '$eid'");
     $count22 = mysqli_num_rows($query22);
     if($count22 > 0){
          $getdata22 = mysqli_fetch_object($query22);
          $todayprice = $getdata22->property_price;
          $guestprice = $getdata22->guest_price;
     }else{
          $day = strtolower(date("l"));
          $guestday = strtolower('guest'.$day);
          $query33 = mysqli_query($sql,"SELECT $day as todayprice, $guestday as guestprice FROM `awt_default_property_price` where `property_id` = '$eid'");
          $getdata33 = mysqli_fetch_object($query33);
          $todayprice = $getdata33->todayprice;
          $guestprice = $getdata33->guestprice;
     }

     $serviceCharge = $todayprice*$service_charge/100;
     $total = $todayprice+$serviceCharge;

     $todayDate = date('d/m/Y');
}


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