<?php
$mobile = '';

$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $mobile = trim($_POST['mobile']);
    $mobile = mysqli_real_escape_string($sql, $mobile);



   /***********************************INSERT*****************************************/


        mysqli_query($sql, "INSERT INTO `awt_instantcall` (`phone`, `created_date`) VALUES ('$mobile','$cdate')");

       
        echo '<script type="text/javascript">window.location.href="index.php?s=1"</script>';
        
}

    if(isset($_GET['s'])){

        $alertMessage = '<div class="alert alert-light text-light mt-2 fadediv" role="alert">We Will Get Back To You Soon..</div>';
    }

   /***********************************Query***************************************/

$query = mysqli_query($sql, "SELECT * FROM `awt_instantcall`  where deleted != 1;");

$count = mysqli_num_rows($query);


?>