<?php

//$query = mysqli_query($sql, "SELECT m.name,m.id,m.email,m.mobile,m.location,m.created_date,m.message,f.title as property_type FROM `awt_messageForm` as m left join `awt_filters` as f on f.id=m.property_type  where m.deleted != 1 order by m.id desc;");

//$count = mysqli_num_rows($query);

if(isset($_GET['search_name'])){$search_name=$_GET['search_name'];}
if(isset($_GET['search_email'])){$search_email=$_GET['search_email'];}
if(isset($_GET['search_location'])){$search_location=$_GET['search_location'];}
if(isset($_GET['search_date'])){$search_date=$_GET['search_date'];}
if(isset($_GET['search_prop_type'])){$search_prop_type=$_GET['search_prop_type'];}

$makequery = "SELECT m.name,m.id,m.email,m.mobile,m.location,m.created_date,m.message,f.title as property_type FROM `awt_messageForm` as m left join `awt_filters` as f on f.id=m.property_type  where m.deleted != 1";
/*if($search_name!=''){
    $makequery.=" and m.name like '%$search_name%'";
}
if($search_email!=''){
    $makequery.=" and m.email = '$search_email'";
}
if($search_location!=''){
    $makequery.=" and m.location like '%$search_location%'";
}*/
if($search_prop_type!=''){
    $makequery.=" and f.title = '$search_prop_type'";
}
if($search_date!=''){
    $search_date_format = date("Y-m-d", strtotime($search_date));
    $makequery.=" and date(m.created_date) = '$search_date_format'";
}
$makequery.=" order by m.id desc";

//echo $makequery;

$query = mysqli_query($sql,$makequery);
$count = mysqli_num_rows($query);
?>