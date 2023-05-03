<?php
$title = '';
$question = '';
$answer = '';
$alertMessage= '';
$eid = '';

$cdate = date('Y-m-d H:i:s');


if(isset($_POST['submit'])){

$question = trim($_POST['question']);
$question = mysqli_real_escape_string($sql,$question);

$answer = trim($_POST['answer']);
$answer = mysqli_real_escape_string($sql,$answer);

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);



/*************************************Insert & Update*********************************/


if($eid == ''){

    mysqli_query($sql, "INSERT INTO `awt_villafaq` (`question`,`answer`,`created_by`, `created_date`) VALUES ('$question','$answer', '1', '$cdate')");
   
    echo '<script type="text/javascript">window.location.href="villafaq.php?s=1"</script>';
    
}else {
    mysqli_query($sql, "UPDATE `awt_villafaq` SET `question`='$question', 
    `answer`='$answer',`updated_by`='1', `updated_date`='$cdate' where id = '$eid'");


        echo '<script type="text/javascript">window.location.href="villafaq.php?u=1"</script>';
}

/************************************Json*********************************/



    $query_json = mysqli_query($sql, "SELECT * FROM `awt_villafaq` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){
            $master_data = array(
                               'id'     => $getdata_json->id,
                                'question'  => $getdata_json->question,
                                'answer'  => $getdata_json->answer,
                              
                                 );

    $array_data[] = $master_data;

     }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/villafaq')) {
        mkdir('../json/villafaq', 0777, true);
    }

    file_put_contents('../json/villafaq/villafaq.json', $final_data);
}

if(isset($_GET['s'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';
}

if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
}

   /***********************************Edit***************************************/


   if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);

    $query = mysqli_query($sql, "SELECT * FROM `awt_villafaq` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $eid = $getdata->id;
    $question = $getdata->question;
    $answer = $getdata->answer;

}



   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `awt_villafaq` SET `deleted` = 1, `updated_by`='1', `updated_date` = '$cdate'  WHERE `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="villafaq.php?d=1"</script>';

}

/***********************************Query***************************************/

 $query = mysqli_query($sql, "SELECT * from  `awt_villafaq`  where deleted != 1");

 $count = mysqli_num_rows($query);


?>
