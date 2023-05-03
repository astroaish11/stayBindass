<?php


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `awt_registerUser` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = 1 where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="manage_users.php?d=1"</script>';

}


$query = mysqli_query($sql, "SELECT * FROM `awt_registerUser` where deleted != 1;");
$count = mysqli_num_rows($query);


?>