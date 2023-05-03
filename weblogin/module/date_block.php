<?php
$date = '';
$price = '';
$eid= '';
$from_date='';
$to_date='';
$pid= $_GET['pid'];
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');
$quantity='';
$hidden_quantity='';
//if(isset($_GET['quantity'])){$quantity=$_GET['quantity'];} 
if(isset($_GET['datesubmit'])){
    $from_date = trim($_GET['from_date']);
    $to_date = trim($_GET['to_date']);
    $pid = $_GET['pid'];
    if(isset($_GET['quantity']))
    {$hidden_quantity = $_GET['quantity'];}
    else{$hidden_quantity = 1;}
    $difference = strtotime($from_date) - strtotime($to_date);
    $days = abs($difference/(60 * 60)/24);
    $checkdate = date('Y-m-d', strtotime($from_date . ' -1 day'));
      for($i=0; $i<=$days; $i++){
          $checkdate = date('Y-m-d', strtotime($checkdate . ' +1 day'));
          $check_date_query = mysqli_query($sql,"SELECT `id` from `awt_blockDates` where `select_date` = '$checkdate' and `property_id`='$pid'");
          $count = mysqli_num_rows($check_date_query);
          if($count == 0){
              mysqli_query($sql,"INSERT INTO `awt_blockDates` (`property_id`,`select_date`,`created_date`,`created_by`) VALUES ('$pid','$checkdate','$cdate','1')");
          }
      }
}

if(isset($_POST['blockdate_update'])){
    $row_count = $_POST['row_count'];
    $hidden_propid = $_POST['hidden_propid'];
    $hidden_quantity = $_POST['hidden_quantity'];
    for($i=1;$i<=$row_count;$i++){
        $select_date = $_POST['select_date' . $i];
		$blocked_date = $_POST['blocked_date' . $i];
          if($blocked_date == 1){
              mysqli_query($sql,"UPDATE `awt_blockDates` set `blockStatus`= 1, `block_quantity`='$hidden_quantity' where `select_date`='$select_date' and `property_id`='$hidden_propid'");
            //  echo "UPDATE `awt_blockDates` set `blockStatus`= 1, `block_quantity`='$quantity' where `select_date`='$select_date' and `property_id`='$hidden_propid'";
          }
         if($blocked_date == 0){
             mysqli_query($sql,"UPDATE `awt_blockDates` set `blockStatus`= 0,`block_quantity`= null where `select_date`='$select_date' and `property_id`='$hidden_propid'");
           //  echo "UPDATE `awt_blockDates` set `blockStatus`= 1, `block_quantity`='$quantity' where `select_date`='$select_date' and `property_id`='$hidden_propid'";
         }
         
    }
}
?>
