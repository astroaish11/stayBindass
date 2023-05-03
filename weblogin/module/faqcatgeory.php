<?php
$title = '';
$id = '';
$alertMessage= '';
$eid = '';

$cdate = date('Y-m-d H:i:s');


if(isset($_POST['submit'])) {

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql,$title);

   

 /******************************INSERT & UPDATE*************************************/

     

    if($eid == ''){
           //check category already exist
           $queryselect =mysqli_query($sql,"SELECT * from `awt_faqcat` where `title` = '$title' and deleted !=1");
           $countqueryselect = mysqli_num_rows($queryselect);

                if($countqueryselect>0){

                    echo '<script type="text/javascript">alert("Category Already Exist")</script>';

                    
                }else{

                    

                    mysqli_query($sql,"INSERT INTO `awt_faqcat` (`title`,`created_date`,`created_by`) VALUES ('$title','$cdate','1')");

                    echo '<script type="text/javascript">window.location.href="faqcat.php?s=1"</script>';
                }
            

    }
    else{

           //check category already exist
           $queryselect =mysqli_query($sql,"SELECT * from `awt_faqcat` where `title` = '$title' and `id` != '$eid'and deleted !=1");
           $countqueryselect = mysqli_num_rows($queryselect);

        if($countqueryselect>0){
    
            echo '<script type="text/javascript">alert("Category Already Exist")</script>';
            
        }else{

        mysqli_query($sql,"UPDATE `awt_faqcat` SET `title`='$title',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");

        echo '<script type="text/javascript">window.location.href="faqcat.php?u=1"</script>';
    }
    }

 /*****************************Json*************************************/


    $query_json = mysqli_query($sql, "SELECT * FROM `awt_faqcat` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/faqcat')) {
        mkdir('../json/faqcat', 0777, true);
    }

    file_put_contents('../json/faqcat/faqcat.json', $final_data);

}


if(isset($_GET['s'])) {

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';

}
if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}

 /******************************Edit***********************************/


if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);
    
    $selectdata = mysqli_query($sql, "SELECT * FROM `awt_faqcat` WHERE `id` = '$eid'");
    
    $getdata = mysqli_fetch_object($selectdata);

    $eid = $getdata->id;
    $title = $getdata->title;
}


 /******************************Delete*************************************/

if(isset($_GET['did'])){
    $did = trim($_GET['did']);
    $did = mysqli_real_escape_string($sql,$did);

    mysqli_query($sql,"UPDATE `awt_faqcat` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");

    echo '<script type="text/javascript">window.location.href="faqcat.php?d=1"</script>';

    /*****************************Json*************************************/


    $query_json = mysqli_query($sql, "SELECT * FROM `awt_faqcat` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/faqcat')) {
        mkdir('../json/faqcat', 0777, true);
    }

    file_put_contents('../json/faqcat/faqcat.json', $final_data);
}

if(isset($_GET['d'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}

 /******************************query*************************************/

   
$query = mysqli_query($sql, "SELECT * FROM `awt_faqcat` WHERE deleted != '1'");
    
$count = mysqli_num_rows($query);


?>














