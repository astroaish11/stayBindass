<?php

//$query = mysqli_query($sql, "SELECT * FROM `awt_contactForm` where deleted != 1 order by id desc;");

//$count = mysqli_num_rows($query);

/*if(isset($_GET['search_name'])){$search_name=$_GET['search_name'];}
if(isset($_GET['search_email'])){$search_email=$_GET['search_email'];}*/
if(isset($_GET['search_date'])){$search_date=$_GET['search_date'];}

$makequery = "SELECT * FROM `awt_contactForm` where deleted != 1";
/*if($search_name!=''){
    $makequery.= " and name like '%$search_name%'";  
}
if($search_email!=''){
    $makequery.= " and email = '$search_email'";  
}*/
if($search_date!=''){
    $search_date_format = date("Y-m-d", strtotime($search_date));
    $makequery.= " and date(created_date) = '$search_date_format'";  
}
$makequery.= " order by id desc";

$query = mysqli_query($sql,$makequery);
$count = mysqli_num_rows($query);


?>