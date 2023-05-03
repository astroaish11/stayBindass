<?php
$title = '';
$question = '';
$answer = '';
$alertMessage= '';
$eid = '';

$cdate = date('Y-m-d H:i:s');


if(isset($_POST['submit'])){

$title = trim($_POST['faqcat']);
$title = mysqli_real_escape_string($sql,$title);

$question = trim($_POST['question']);
$question = mysqli_real_escape_string($sql,$question);

$answer = trim($_POST['answer']);
$answer = mysqli_real_escape_string($sql,$answer);

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);



/*************************************Insert & Update*********************************/
     


if($eid == ''){

   //check FAQmaster already exist
   $queryselect =mysqli_query($sql,"SELECT * from `awt_faqmaster` where `question` = '$question' and deleted != 1");
   $countqueryselect = mysqli_num_rows($queryselect);

                if($countqueryselect>0){

                    echo '<script type="text/javascript">alert("Question Already Exist")</script>';
                    
                }else{

                    

                    mysqli_query($sql, "INSERT INTO `awt_faqmaster` (`title_id`,`question`,`answer`,`created_by`, `created_date`) VALUES ('$title','$question','$answer', '1', '$cdate')");
   
                    echo '<script type="text/javascript">window.location.href="faqmaster.php?s=1"</script>';
                }
                    


    
}else {
       //check FAQmaster already exist
       $queryselect =mysqli_query($sql,"SELECT * from `awt_faqmaster` where `question` = '$question' and `id`!= '$eid' and deleted != 1");
       $countqueryselect = mysqli_num_rows($queryselect);
    
 
      
    mysqli_query($sql, "UPDATE `awt_faqmaster` SET `title_id`='$title',`question`='$question', 
    `answer`='$answer',`updated_by`='1', `updated_date`='$cdate' where id = '$eid'");


        echo '<script type="text/javascript">window.location.href="faqmaster.php?u=1"</script>';

}

/************************************Json*********************************/



    $query_json = mysqli_query($sql, "SELECT * FROM `awt_faqmaster` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){
            $master_data = array(
                               'id'     => $getdata_json->id,
                                'title_id'  => $getdata_json->title_id,
                                'question'  => $getdata_json->question,
                                'answer'  => $getdata_json->answer,
                              
                                 );

    $array_data[] = $master_data;

     }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/faqmaster')) {
        mkdir('../json/faqmaster', 0777, true);
    }

    file_put_contents('../json/faqmaster/faqmaster.json', $final_data);
}

if(isset($_GET['s'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';
}

if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
}

   /***********************************Function***************************************/

   function getFaqcat($sql, $title){

    $getdata = mysqli_query($sql, "SELECT * FROM `awt_faqcat` where `deleted` != 1");

    while($listdata = mysqli_fetch_object($getdata)){

        echo '<option value="'.$listdata->id.'"';
			if($listdata->id == $title){ echo 'selected="selected"';}
			echo '>'.$listdata->title.'</option>';

    }

}




   /***********************************Edit***************************************/


   if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);

    $query = mysqli_query($sql, "SELECT * FROM `awt_faqmaster` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $eid = $getdata->id;
    $title = $getdata->title_id;
    $question = $getdata->question;
    $answer = $getdata->answer;

  

}



   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `awt_faqmaster` SET `deleted` = 1, `updated_by`='1', `updated_date` = '$cdate'  WHERE `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="faqmaster.php?d=1"</script>';

    /************************************Json*********************************/



    $query_json = mysqli_query($sql, "SELECT * FROM `awt_faqmaster` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){
            $master_data = array(
                               'id'     => $getdata_json->id,
                                'title_id'  => $getdata_json->title_id,
                                'question'  => $getdata_json->question,
                                'answer'  => $getdata_json->answer,
                              
                                 );

    $array_data[] = $master_data;

     }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/faqmaster')) {
        mkdir('../json/faqmaster', 0777, true);
    }

    file_put_contents('../json/faqmaster/faqmaster.json', $final_data);

}

/***********************************Query***************************************/

 $query = mysqli_query($sql, "SELECT s.*, f.title from  `awt_faqmaster` as s
                            left Join `awt_faqcat` as f 
                            on f.id = s.title_id
                            where f.deleted != 1 and s.deleted != 1");

 $count = mysqli_num_rows($query);


?>
