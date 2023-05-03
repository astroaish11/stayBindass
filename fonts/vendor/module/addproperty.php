<?php
$guest = '';
$nights = '';
$pool = '';
$destination = '';
//$prophigh = '';
$propcat = '';
$amenities = '';
$title = '';
$slug = '';
$state = '';
$city = '';
$address = '';
$home_type = '';
$room_type = '';
$bhk = '';
$project_status = '';
$property = '';
$vendor = '';
$overview = '';
$specification = '';
$seo_title = '';
$seo_keyword = '';
$seo_desc = '';
$location_link = '';
$rules = '';
$security = '';
$policies = '';
$shortdesc = '';
$image = '';
$villaQuantity ='';
$status ='';
$eid = '';
$idsarray = '';
$path = "../upload/property_thumbnail/";
$valid_formats = array("jpg", "png", "gif", "bmp", "jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");

$loginuserid = $_SESSION[SESSION]['loginuserid'];



$cdate = date('Y-m-d H:i:s');

if (isset($_POST['submit'])) {

   

    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql, $title);

    $slug = trim($_POST['slug']);
    $slug = mysqli_real_escape_string($sql, $slug);

    $state = trim($_POST['state']);
    $state = mysqli_real_escape_string($sql, $state);

    $city = trim($_POST['city']);
    $city = mysqli_real_escape_string($sql, $city);

    $address = trim($_POST['address']);
    $address = mysqli_real_escape_string($sql, $address);

    $home_type = trim($_POST['home_type']);
    $home_type = mysqli_real_escape_string($sql, $home_type);

    $room_type = trim($_POST['room_type']);
    $room_type = mysqli_real_escape_string($sql, $room_type);

    /* $bhk = trim($_POST['bhk']);
    $bhk = mysqli_real_escape_string($sql, $bhk);*/

    $bhklist = $_POST['bhk'];
    $bhk = '';
    foreach ($bhklist as $bhknamelist) {
        if ($bhk == '') {
            $bhk = $bhknamelist;
        } else {
            $bhk = $bhk . ',' . $bhknamelist;
        }

    }

    $guest = trim($_POST['guest']);
    $guest = mysqli_real_escape_string($sql, $guest);

    $nights = trim($_POST['nights']);
    $nights = mysqli_real_escape_string($sql, $nights);

    $pool = trim($_POST['pool']);
    $pool = mysqli_real_escape_string($sql, $pool);

    $destination = trim($_POST['destination']);
    $destination = mysqli_real_escape_string($sql, $destination);

    // $prophigh = trim($_POST['prophigh']);
    //  $prophigh = mysqli_real_escape_string($sql, $prophigh);

    /* $propcat = trim($_POST['propcat']);
    $propcat = mysqli_real_escape_string($sql, $propcat);
    $amenities = trim($_POST['amenities']);
    $amenities = mysqli_real_escape_string($sql, $amenities);*/

    $propcatlist = $_POST['propcat'];
    $propcat = '';
    foreach ($propcatlist as $propcatnamelist) {
        if ($propcat == '') {
            $propcat = $propcatnamelist;
        } else {
            $propcat = $propcat . ',' . $propcatnamelist;
        }

    }

    $amenitieslist = $_POST['amenities'];
    $amenities = '';
    foreach ($amenitieslist as $amenitiesnamelist) {
        if ($amenities == '') {
            $amenities = $amenitiesnamelist;
        } else {
            $amenities = $amenities . ',' . $amenitiesnamelist;
        }

    }

    $villaQuantity = trim($_POST['villaQuantity']);
    $villaQuantity = mysqli_real_escape_string($sql, $villaQuantity);

    $overview = trim($_POST['overview']);
    $overview = mysqli_real_escape_string($sql, $overview);

    $specification = trim($_POST['specification']);
    $specification = mysqli_real_escape_string($sql, $specification);

    $seo_title = trim($_POST['seo_title']);
    $seo_title = mysqli_real_escape_string($sql, $seo_title);

    $seo_keyword = trim($_POST['seo_key']);
    $seo_keyword = mysqli_real_escape_string($sql, $seo_keyword);

    $seo_desc = trim($_POST['seo_desc']);
    $seo_desc = mysqli_real_escape_string($sql, $seo_desc);

    $location_link = trim($_POST['location_link']);
    $location_link = mysqli_real_escape_string($sql, $location_link);

    $rules = trim($_POST['rules']);
    $rules = mysqli_real_escape_string($sql, $rules);

    $security = trim($_POST['security']);
    $security = mysqli_real_escape_string($sql, $security);

    $policies = trim($_POST['policies']);
    $policies = mysqli_real_escape_string($sql, $policies);

    $shortdesc = trim($_POST['shortdesc']);
    $shortdesc = mysqli_real_escape_string($sql, $shortdesc);

    $property = trim($_POST['vendor']);
    $property = mysqli_real_escape_string($sql, $property);

    $latitude = trim($_POST['latitude']);
    $latitude = mysqli_real_escape_string($sql, $latitude);

    $longitude = trim($_POST['longitude']);
    $longitude = mysqli_real_escape_string($sql, $longitude);
    
    $status = trim($_POST['status']);
    $status = mysqli_real_escape_string($conn, $status);
    
    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $uploadimage = trim($_POST['uploadimage']);
    $uploadimage = mysqli_real_escape_string($sql, $uploadimage);

    //echo $property.'- vendor';
    //Thumbnail property image
    $upload = $_FILES['uploadimage']['name'];

    if ($upload != '') {

        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);

        list($txt, $ext) = explode(".", $upload);

        if (in_array($ext, $valid_formats)) {

            $txt = str_replace(" ", "-", $txt);
            global $upload_image;
            $upload_image = $txt . "-" . time() . "." . $ext;

            $tmp = $_FILES['uploadimage']['tmp_name'];
            move_uploaded_file($tmp, $path . $upload_image);

        } else {

        }

        $uploadimage = $upload_image;

    } else {

        $uploadimage = mysqli_real_escape_string($sql, $_POST['image']);

    }



    /*******************************Insert & Update**************************************/



    if ($eid == '') {

        //mysqli_query($sql, "INSERT INTO `addproperty` (`title`,`slug`,`state`,`city`,`address`,`h_type`,`r_type`,`bhk`,`guest`, `nights`, `pool`, `destination`, `prophigh`, `propcat`, `amenities`, `project_status`,`property_by`,`overview`,`specification`,`seo_title`,`seo_keyword`,`seo_desc`,`location_link`,`rules`,`security`,`policies`,`shortdesc`,`uploadimage`,`latitude`,`longitude`,`created_date`,`created_by`) VALUES ('$title','$slug','$state','$city','$address','$home_type','$room_type','$bhk', '$guest', '$nights', '$pool', '$destination', '$prophigh', '$propcat', '$amenities', '$project_status','$property','$overview','$specification','$seo_title','$seo_keyword','$seo_desc','$location_link','$rules','$security','$policies','$shortdesc','$uploadimage','$latitude','$longitude','$cdate','1')");

        if ($bhk != '') {
            $colnamearray = array();
            $colnamearray = explode(',', $bhk); //extracting comma separated string into array
        } else {
            $colnamearray = '';
        }
    
        $a = array();
       foreach($colnamearray as $data)
       {
        $selectiddata = mysqli_query($sql, "SELECT * FROM `bhk_master` WHERE `bhk` = '$data'");
        $getiddata = mysqli_fetch_object($selectiddata);
    
        $bhk_name = $getiddata->id;
         array_push($a,$bhk_name);
         $idsarray = implode(",",$a);
       }

        mysqli_query($sql, "INSERT INTO `addproperty` (`title`,`slug`,`state`,`city`,`address`,`h_type`,`r_type`,`bhk`,`bhk_ids`,`guest`, `nights`, `pool`, `destination`, `propcat`, `amenities`,`villaQuantity`, `project_status`,`property_by`,`overview`,`specification`,`seo_title`,`seo_keyword`,`seo_desc`,`location_link`,`rules`,`security`,`policies`,`shortdesc`,`uploadimage`,`latitude`,`longitude`,`created_date`,`created_by`) VALUES ('$title','$slug','$state','$city','$address','$home_type','$room_type','$bhk','$idsarray','$guest', '$nights', '$pool', '$destination', '$propcat', '$amenities','$villaQuantity', '$project_status','$property','$overview','$specification','$seo_title','$seo_keyword','$seo_desc','$location_link','$rules','$security','$policies','$shortdesc','$uploadimage','$latitude','$longitude','$cdate','1')");

        
      //  echo '<script type="text/javascript">window.location.href="manage_listing.php?s=1"</script>';
    } else {

        //mysqli_query($sql, "UPDATE `addproperty` SET `title`='$title',`slug`='$slug',`state`='$state',`city`='$city',`address`='$address',`h_type`='$home_type',`r_type`='$room_type',`bhk`='$bhk', `guest`='$guest', `nights`='$nights', `pool`='$pool', `destination`='$destination', `prophigh`='$prophigh', `propcat`='$propcat', `amenities`='$amenities', `project_status`='$project_status',`property_by`='$property',`overview`='$overview',`specification`='$specification',`seo_title`='$seo_title',`seo_keyword`='$seo_keyword',`seo_desc`='$seo_desc',`location_link`='$location_link',`rules`='$rules',`security`='$security',`policies`='$policies',`shortdesc`='$shortdesc',`uploadimage`='$uploadimage',`latitude`='$latitude',`longitude`='$longitude',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");

        if ($bhk != '') {
            $colnamearray = array();
            $colnamearray = explode(',', $bhk); //extracting comma separated string into array
        } else {
            $colnamearray = '';
        }
    
        $a = array();
       foreach($colnamearray as $data)
       {
        $selectiddata = mysqli_query($sql, "SELECT * FROM `bhk_master` WHERE `bhk` = '$data'");
        $getiddata = mysqli_fetch_object($selectiddata);
    
        $bhk_name = $getiddata->id;
         array_push($a,$bhk_name);
         $idsarray = implode(",",$a);
       }


        mysqli_query($sql, "UPDATE `addproperty` SET `title`='$title',`slug`='$slug',`state`='$state',`city`='$city',`address`='$address',`h_type`='$home_type',`r_type`='$room_type',`bhk`='$bhk', `bhk_ids`='$idsarray', `guest`='$guest', `nights`='$nights', `pool`='$pool', `destination`='$destination', `propcat`='$propcat', `amenities`='$amenities',`villaQuantity`='$villaQuantity',`project_status`='$project_status',`property_by`='$property',`overview`='$overview',`specification`='$specification',`seo_title`='$seo_title',`seo_keyword`='$seo_keyword',`seo_desc`='$seo_desc',`location_link`='$location_link',`rules`='$rules',`security`='$security',`policies`='$policies',`shortdesc`='$shortdesc',`uploadimage`='$uploadimage',`latitude`='$latitude',`longitude`='$longitude',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");


    //   echo '<script type="text/javascript">window.location.href="manage_listing.php?u=1"</script>';
    }


    /***********************************  Json*********************************/


    //$query_json = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `deleted` != '1'");
   /* $query_json = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname,ph.title as propertyhighlight FROM `addproperty` as a 
    left join `home_master` as h on h.id=a.h_type 
    left join `room_master` as r on r.id=a.r_type
    left join `pool_master` as p on r.id=a.pool
    left join `night_master` as n on n.id=a.nights
    left join `destination_master` as d on d.id=a.destination
    left join `property_highlight` as ph on p.id=a.prophigh
    left join `city_master` as c on c.id=a.city
    left join `awt_states` as s on s.id=a.state
    WHERE a.deleted != '1'");*/

   // print_r($idsarray);

    $query_json = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname
    FROM `addproperty` as a 
    left join `home_master` as h on h.id=a.h_type 
    left join `room_master` as r on r.id=a.r_type
    left join `pool_master` as p on p.id=a.pool
    left join `night_master` as n on n.id=a.nights
    left join `destination_master` as d on d.id=a.destination
    left join `city_master` as c on c.id=a.city
    left join `awt_states` as s on s.id=a.state
    WHERE a.deleted != '1'");


    $array_data = array();

    while ($getdata_json = mysqli_fetch_object($query_json)) {

        $master_data = array(
            'title' => $getdata_json->title,
            'slug' => $getdata_json->slug,
            //'state' => $getdata_json->state,
            'state' => $getdata_json->statename,
            //'city' => $getdata_json->city,
            'city' => $getdata_json->cityname,
            'address' => $getdata_json->address,
            //'home_type' => $getdata_json->h_type,
            'home_type' => $getdata_json->homename,
            //'room_type' => $getdata_json->r_type,
            'room_type' => $getdata_json->roomname,
            'bhk' => $getdata_json->bhk,
            'bhkid' => $getdata_json->bhk_ids,
            'guest' => $getdata_json->guest,
            //'nights' => $getdata_json->nights,
            'nights' => $getdata_json->nightname,
            //'destination' => $getdata_json->destination,
            'destination' => $getdata_json->destinationname,
            'destinationid' => $getdata_json->destination,
            //'prophigh' => $getdata_json->prophigh,
            // 'prophigh' => $getdata_json->propertyhighlight,
            'propcat' => $getdata_json->propcat,
            'amenities' => $getdata_json->amenities,
            'villaQuantity'=>$getdata_json->villaQuantity,
            //'pool' => $getdata_json->pool,
            'pool' => $getdata_json->poolname,
            'project_status' => $getdata_json->project_status,
            'property_by' => $getdata_json->property_by,
            'overview' => $getdata_json->overview,
            'specification' => $getdata_json->specification,
            'seo_title' => $getdata_json->seo_title,
            'seo_keyword' => $getdata_json->seo_keyword,
            'seo_desc' => $getdata_json->seo_desc,
            'location_link' => $getdata_json->location_link,
            'rules' => $getdata_json->rules,
            'security' => $getdata_json->security,
            'policies' => $getdata_json->policies,
            'shortdesc' => $getdata_json->shortdesc,
            'image' => $getdata_json->uploadimage,
            'latitude' => $getdata_json->latitude,
            'longitude' => $getdata_json->longitude,
        );
        $array_data[] = $master_data;

        $final_data = json_encode($array_data);

        if (!file_exists('../json/addproperty')) {
            mkdir('../json/addproperty', 0777, true);
        }

        file_put_contents('../json/addproperty/addproperty.json', $final_data);
    }

}

if (isset($_GET['s'])) {

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';

}
if (isset($_GET['u'])) {

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}





/*********************************  Edit ***************************************/

if (isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $selectdata = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `id` = '$eid'");
    $getdata = mysqli_fetch_object($selectdata);




    $guest = $getdata->guest;
    $vendor = $getdata->property_by;
    //echo "helloooo".$vendor.'bye';
    $nights = $getdata->nights;
    $pool = $getdata->pool;
    $destination = $getdata->destination;
   // $prophigh = $getdata->prophigh;
    $propcat = $getdata->propcat;
    $amenities = $getdata->amenities;
    $title = $getdata->title;
    $slug = $getdata->slug;
    $state = $getdata->state;
    $city = $getdata->city;
    $address = $getdata->address;
    $h_type = $getdata->h_type;
    $r_type = $getdata->r_type;
    $guestname = $getdata->guest;
    $nightname = $getdata->nights;
    $poolname = $getdata->pool;
    $destinationname = $getdata->destination;
   // $propertyhighlightname = $getdata->prophigh;
    $bhk = $getdata->bhk;
    $project_status = $getdata->project_status;
    $prop_cat = $getdata->propcat;
    $amenities_name = $getdata->amenities;
    $villaQuantity =$getdata->villaQuantity;
    $property_by = $getdata->property_by;
    $overview = $getdata->overview;
    $specification = $getdata->specification;
    $seo_title = $getdata->seo_title;
    $seo_keyword = $getdata->seo_keyword;
    $seo_desc = $getdata->seo_desc;
    $location_link = $getdata->location_link;
    $rules = $getdata->rules;
    $security = $getdata->security;
    $policies = $getdata->policies;
    $shortdesc = $getdata->shortdesc;
    $uploadimage = $getdata->uploadimage;
    $image = $uploadimage;
    $latitude = $getdata->latitude;
    $longitude = $getdata->longitude;
    $eid = $getdata->id;

}


/***********************************Functions***************************************/
function vendor($sql, $vendors)
{

    $query6 = mysqli_query($sql, "SELECT * FROM `vendor_master` WHERE `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query6)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $vendors) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->name . '</option>';

    }

}

function states($sql, $state)
{

    $query2 = mysqli_query($sql, "SELECT * FROM `awt_states` ");

    while ($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $state) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->name . '</option>';

    }

}

function city($sql, $state, $city)
{

    // $query3 = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `deleted` != 1");

    $query3 = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `state`='$state' and `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query3)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $city) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->city . '</option>';

    }

}

function bhk($sql, $bhk)
{
   // echo $bhk;
    /* $query7 = mysqli_query($sql, "SELECT * FROM `bhk_master` WHERE `deleted` != 1");
    while ($listdata = mysqli_fetch_object($query7)) {
    //previous code
    echo '<option value="' . $listdata->id . '"';
    if ($listdata->id == $bhk) {
    echo ' selected="selected" ';
    }
    echo '>' . $listdata->bhk . '</option>';
    //new code
    echo '<option value="' . $listdata->bhk . '"';
    if ($listdata->bhk == $bhk) {
    echo ' selected="selected" ';
    }
    echo '>' . $listdata->bhk . '</option>';
    }*/

    if ($bhk != '') {
        $colnamearray = array();
        $colnamearray = explode(',', $bhk);
    } else {
        $colnamearray = '';
    }

    $query7 = "SELECT * FROM `bhk_master` WHERE `deleted` != 1";
    $query_run = mysqli_query($sql, $query7);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
            echo '<option value="' . $row['bhk'] . '"';
            if (in_array($row['bhk'], $colnamearray)) {
                echo 'selected="selected"';
            }
            echo '>' . $row['bhk'] . '</option>';
        }
    } else {
        echo '<option value="">No Record Found</option>';
    }

}

function room($sql, $room)
{

    $query5 = mysqli_query($sql, "SELECT * FROM `room_master` WHERE `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query5)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $room) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->room . '</option>';

    }

}

function home($sql, $home)
{

    $query4 = mysqli_query($sql, "SELECT * FROM `home_master` WHERE `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query4)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $home) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->home . '</option>';

    }

}


function guest($sql, $guestname)
{

    $query2 = mysqli_query($sql, "SELECT * FROM `guest_master` where `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $guestname) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->guest . '</option>';

    }

}

function night($sql, $nightname)
{

    $query2 = mysqli_query($sql, "SELECT * FROM `night_master`  where `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $nightname) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->night . '</option>';

    }

}

function pool($sql, $poolname)
{

    $query2 = mysqli_query($sql, "SELECT * FROM `pool_master` where `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $poolname) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->pool . '</option>';

    }

}

function destination($sql, $destinationname)
{

    $query2 = mysqli_query($sql, "SELECT * FROM `destination_master` where `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $destinationname) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->title . '</option>';

    }

}

/*function property_highlight($sql, $propertyhighlightname)
{

    $query2 = mysqli_query($sql, "SELECT * FROM `property_highlight` where `deleted` != 1");

    while ($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="' . $listdata->id . '"';
        if ($listdata->id == $propertyhighlightname) {
            echo ' selected="selected" ';
        }
        echo '>' . $listdata->title . '</option>';

    }

}*/

function property_category($sql, $prop_cat)
{

    /*$query2 = mysqli_query($sql, "SELECT * FROM `awt_filters` where `deleted` != 1");
    while ($listdata = mysqli_fetch_object($query2)) {
    echo '<option value="' . $listdata->id . '"';
    if ($listdata->id == $prop_cat) {
    echo ' selected="selected" ';
    }
    echo '>' . $listdata->title . '</option>';
    echo '<option value="' . $listdata->title . '"';
    if ($listdata->title == $prop_cat) {
    echo ' selected="selected" ';
    }
    echo '>' . $listdata->title . '</option>';
    }*/

    if ($prop_cat != '') {
        $colnamearray = array();
        $colnamearray = explode(',', $prop_cat);
    } else {
        $colnamearray = '';
    }

    $query2 = "SELECT * FROM `awt_filters` WHERE `deleted` != 1";
    $query_run = mysqli_query($sql, $query2);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
            echo '<option value="' . $row['title'] . '"';
            if (in_array($row['title'], $colnamearray)) {
                echo 'selected="selected"';
            }
            echo '>' . $row['title'] . '</option>';
        }
    } else {
        echo '<option value="">No Record Found</option>';
    }


}


function amenitiesname($sql, $amenities_name)
{

    /*  $query2 = mysqli_query($sql, "SELECT * FROM `awt_facilities` where `deleted` != 1");
    while ($listdata = mysqli_fetch_object($query2)) {
    /*echo '<option value="' . $listdata->id . '"';
    if ($listdata->id == $amenities_name) {
    echo ' selected="selected" ';
    }
    echo '>' . $listdata->title . '</option>';
    echo '<option value="' . $listdata->title . '"';
    if ($listdata->title == $amenities_name) {
    echo ' selected="selected" ';
    }
    echo '>' . $listdata->title . '</option>';
    }*/

    if ($amenities_name != '') {
        $colnamearray = array();
        $colnamearray = explode(',', $amenities_name);
    } else {
        $colnamearray = '';
    }

    $query2 = "SELECT * FROM `awt_facilities` WHERE `deleted` != 1";
    $query_run = mysqli_query($sql, $query2);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
            echo '<option value="' . $row['title'] . '"';
            if (in_array($row['title'], $colnamearray)) {
                echo 'selected="selected"';
            }
            echo '>' . $row['title'] . '</option>';
        }
    } else {
        echo '<option value="">No Record Found</option>';
    }

}

/***************************  Delete **************************/


if (isset($_GET['did'])) {
    $did = trim($_GET['did']);
    $did = mysqli_real_escape_string($sql, $did);

    mysqli_query($sql, "UPDATE `addproperty` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");

    echo '<script type="text/javascript">window.location.href="addProperties.php?d=1"</script>';
}

if (isset($_GET['d'])) {

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}


/********************************  Query *********************************/


$query = mysqli_query($sql, "SELECT a.*, r.room, v.name, b.bhk as bhkname, d.title as titlename, s.name, c.city as cityname 
                        from `addproperty` as a 
                        left Join `room_master` as r on r.id = a.r_type 
                        left Join `vendor_master` as v on v.id = a.property_by 
                        left Join `bhk_master` as b on b.id = a.bhk 
                        left Join `destination_master` as d on d.id = a.destination 
                        left Join `awt_states` as s on s.id = a.state 
                        left Join `city_master` as c on c.id = a.city 
                        where a.deleted != 1 and $loginuserid=a.property_by");



$count = mysqli_num_rows($query);






?>