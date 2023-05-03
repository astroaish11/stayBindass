<?php
$name = '';
$subject = '';
$email = '';
$mobile = '';
$property_type = '';
$location = '';
$message = '';

$eid = '';
$alertMessage = '';
$cdate = date('Y-m-d H:i:s');


if(isset($_POST['submit'])){

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);

$name = trim($_POST['name']);
$name = mysqli_real_escape_string($sql,$name);

$email =  trim($_POST['email']);
$email = mysqli_real_escape_string($sql,$email);

$mobile =  trim($_POST['mobile']);
$mobile = mysqli_real_escape_string($sql,$mobile);

$property_type =  trim($_POST['property_type']);
$property_type = mysqli_real_escape_string($sql,$property_type);

$location = trim($_POST['location']);
$location = mysqli_real_escape_string($sql,$location);

$messages = trim($_POST['messages']);
$messages = mysqli_real_escape_string($sql,$messages);


/***************************  Insert ****************************/    

if($eid == ''){
    mysqli_query($sql,"INSERT INTO `awt_messageForm` (`name`,`mobile`,`email`,`location`,`message`,`property_type`,`created_date`,`created_by`) VALUES ('$name','$mobile','$email','$location','$messages','$property_type','$cdate','1')");

    //Admin mail template

    ini_set("sendmail_from", "support@staybindass.com");
     $to = "support@staybindass.com"; //change admin address  
     $subject = "HomeOwner Request";
     $message = '<div style="padding: 50px 0px;background: #f5f5f5;width: 100%;">
     <div style="border: 0px solid #70d8ed; padding: 20px;background: #fff; width: 700px; margin: 0 auto;">
         <div style="padding-bottom:20px;margin-bottom:20px;border-bottom:1px solid #03bbe1;">
             <div style="text-align:center;">
                 <img src="'.LOGO.'" style="width:150px; padding:10px 0px;" />
                 <!--<p style="font-size: 20px; font-weight: bold;">Stay Bindass</p>-->
             </div>
         </div>			  
         <div>
             <p style="margin:0px 0px 10px 0px;">
             <p>Dear Admin</p>
             <p>Client Name : '.$name.'</p>
             <p>Client Contact No : '.$mobile.'</p>
             <p>Message regarding Property : '.$messages.'</p>
             <p>Property Location ='.$location.'</p>
             <p>Thank you</p>
            
             
         </div>
     </div>
 </div>';
     // $header = "From:info@staybindass.com \r\n";  
 
     $header = "From:info@staybindass.com \r\n";
     $header .= "MIME-Version: 1.0 \r\n";
     $header .= "Content-type: text/html;charset=UTF-8 \r\n";
 
     $result = mail($to, $subject, $message, $header);


     
    //vendor mail template

    ini_set("sendmail_from", "support@staybindass.com");
    $to = "$email"; //change receiver address  
    $subject = "Thank you for listing your Property";
    $message = '<div style="padding: 50px 0px;background: #f5f5f5;width: 100%;">
    <div style="border: 0px solid #70d8ed; padding: 20px;background: #fff; width: 700px; margin: 0 auto;">
        <div style="padding-bottom:20px;margin-bottom:20px;border-bottom:1px solid #03bbe1;">
            <div style="text-align:center;">
                <img src="'.LOGO.'" style="width:150px; padding:10px 0px;" />
                <!--<p style="font-size: 20px; font-weight: bold;">Stay Bindass</p>-->
            </div>
        </div>			  
        <div>
            <p style="margin:0px 0px 10px 0px;">
            <p>Dear '.$name.',</p>
            <p> Congratulations on successfully listing your property on StayBindass.com. We are delighted to list your property on our website and believe that it will generate a lot of attention. We appreciate you considering StayBindass.com as your preferred medium to advertise your property.</p>
            <p>Thank you,</p>
            <p>Team Stay Bindass</p>
        </div>
    </div>
</div>';
    // $header = "From:info@staybindass.com \r\n";  

    $header = "From:info@staybindass.com \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-type: text/html;charset=UTF-8 \r\n";

    $result = mail($to, $subject, $message, $header);



    
    echo '<script type="text/javascript">window.location.href="list-your-property.php?s=1"</script>';
    } 
}

if(isset($_GET['s'])){
	$alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Thanks for contacting us! We will be in touch with you shortly..</div>';
}

function property_types($sql,$selected){

    $propertylist = mysqli_query($sql,"SELECT `id`, `title` from `awt_filters` where `deleted` != 1 ");
    while($listdata1 = mysqli_fetch_object($propertylist)){
        echo '<option value="'.$listdata1->id.'"';
        if($listdata1->id == $selected){echo 'selected = "selected"';}
        echo '>'.$listdata1->title.'</option>';
    }
}

?>