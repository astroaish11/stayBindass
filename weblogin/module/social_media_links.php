<?php
$link = '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');

if(isset($_POST['update'])) {

    $link = trim($_POST['link']);
    $link = mysqli_real_escape_string($sql, $link);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $userid = $_SESSION[$session]['loginuserid']; 


        mysqli_query($sql, "UPDATE `awt_social_links` SET `link`='$link' WHERE `id` = '$eid'");

        echo '<script type="text/javascript">window.location.href="social_media_links.php?u=1"</script>';

        $query_json = mysqli_query($sql, "SELECT * FROM `awt_social_links` where `deleted` != '1'");

        $array_data = array();
        while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                                'link' => $getdata_json->link
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/social_links')) {
        mkdir('../json/social_links', 0777, true);
    }

    file_put_contents('../json/social_links/social_links.json', $final_data);

}

    if(isset($_GET['eid'])) 
    {

        $eid = trim($_GET['eid']);    
        $eid = mysqli_real_escape_string($sql, $eid);
    
        $query = mysqli_query($sql, "SELECT * FROM `awt_social_links` where `id` = '$eid'");
    
        $getdata = mysqli_fetch_object($query);
    
        $title = $getdata->title;
        $link = $getdata->link;
        $eid = $getdata->id;
    
    }
    
    if(isset($_GET['u'])) {
    
        $alertMessage = '<div class="alert alert-success mt-2" role="alert">Data Updated Successfully</div>';
    
    }

    $query = mysqli_query($sql, "SELECT * FROM `awt_social_links` where deleted != '1'");
    
    $count = mysqli_num_rows($query);


?>