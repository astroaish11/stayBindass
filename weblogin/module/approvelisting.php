<?php
$cdate = date('Y-m-d H:i:s');
$reason = '';
$prop_id = '';
$status_approval = '';

//$prop_id = '';
if(isset($_POST['updateproperty_status'])){
  //  echo '<script type="text/javascript">alert("hello")</script>';
    $prop_id = $_POST['propertyid'];
    $prop_id = mysqli_real_escape_string($sql,$prop_id);

    $reason = $_POST['reason'];
    $reason = mysqli_real_escape_string($sql,$reason);

    $status_approval = $_POST['status_approval'];
    $status_approval = mysqli_real_escape_string($sql,$status_approval);

    $get_vendorid = mysqli_query($sql,"SELECT `property_by` from `addproperty` where `id`='$prop_id'");
    $get_datavendor = mysqli_fetch_object($get_vendorid);
    $vendorid = $get_datavendor->property_by;

    $vendor_data = mysqli_query($sql,"SELECT `name`,`email` from `vendor_master` where `id`='$vendorid'");
    $list_vendordata = mysqli_fetch_object($vendor_data);
    $vendor_name = $list_vendordata->name;
    $vendor_email = $list_vendordata->email;

    if($status_approval == 1)
    {
        // 0 = disapprove
        mysqli_query($sql,"UPDATE `addproperty` SET `adminApproval`= 0, `reason`='$reason' WHERE `id`='$prop_id'");

/*************************************Vendor Disapprove Mail***************************************/

        ini_set("sendmail_from", "support@staybindass.com");
        $to = $vendor_email; //change receiver address  
        $subject = "Property Status on Staybindass.com";
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
             <p>Dear '.$vendor_name.',</p>
             <p>I regret to inform you that your property has been disapproved for listing on StayBindass.com. After a careful review, we have determined that your property does not meet our listing requirements at this time. </p>
             <p>Thank you,</p>
             <p>Team Staybindass.com</p>
         </div>
        </div>
        </div>';
     // $header = "From:info@staybindass.com \r\n";  
 
        $header = "From:support@staybindass.com\r\n";
        $header .= "MIME-Version: 1.0 \r\n";
        $header .= "Content-type: text/html;charset=UTF-8 \r\n";
 
        $result = mail($to, $subject, $message, $header);



            /**************APPROVAL Json**************/


		$query_json = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname,d.slug as destinationslug
		FROM `addproperty` as a 
		left join `home_master` as h on h.id=a.h_type 
		left join `room_master` as r on r.id=a.r_type
		left join `pool_master` as p on p.id=a.pool
		left join `night_master` as n on n.id=a.nights
		left join `destination_master` as d on d.id=a.destination
		left join `city_master` as c on c.id=a.city
		left join `awt_states` as s on s.id=a.state
		WHERE a.deleted != '1' and a.adminApproval='1' and  a.villaStatus = '0'");
	
	
		$array_data = array();
	
		while ($getdata_json = mysqli_fetch_object($query_json)) {
	
			$master_data = array(
				'id' => $getdata_json->id,
				'title' => $getdata_json->title,
                'actualtitle' => $getdata_json->actualtitle,
				'slug' => $getdata_json->slug,
				'sale_status' => $getdata_json->sale_status,
				'adminApproval' => $getdata_json->adminApproval,			
				'state' => $getdata_json->statename,			
				'city' => $getdata_json->cityname,
				'address' => $getdata_json->address,
				'home_type' => $getdata_json->homename,
				'room_type' => $getdata_json->roomname,
				'bhk' => $getdata_json->bhk,
				'bhkid' => $getdata_json->bhk_ids,
				'minguest' => $getdata_json->minguest,
				'maxguest' => $getdata_json->maxguest,
				'nights' => $getdata_json->nightname,
				'destination' => $getdata_json->destinationname,
				'destinationslug' => $getdata_json->destinationslug,
				'destinationid' => $getdata_json->destination,
				'propcat' => $getdata_json->propcat,
				'amenities' => $getdata_json->amenities,
				'pool' => $getdata_json->poolname,
				'villaQuantity'=>$getdata_json->villaQuantity,
				'project_status' => $getdata_json->project_status,
				'property_by' => $getdata_json->property_by,
				'overview' => $getdata_json->overview,
				'specification' => $getdata_json->specification,
				'seo_title' => $getdata_json->seo_title,
				'seo_keyword' => $getdata_json->seo_keyword,
				'seo_desc' => $getdata_json->seo_desc,
				'location_link' => $getdata_json->location_link,
				'rules' => $getdata_json->rules,
				'security' => $getdata_json->security,
				'policies' => $getdata_json->policies,
				'shortdesc' => $getdata_json->shortdesc,
				'image' => $getdata_json->uploadimage,
				'latitude' => $getdata_json->latitude,
				'longitude' => $getdata_json->longitude,
			);
			$array_data[] = $master_data;
	
			$final_data = json_encode($array_data);
	
			if (!file_exists('../json/approveProperty')) {
				mkdir('../json/approveProperty', 0777, true);
			}
	
			file_put_contents('../json/approveProperty/approveProperty.json', $final_data);
		}
     
    }
    else
    {
        // 1 = approve
        mysqli_query($sql,"UPDATE `addproperty` SET `adminApproval`= 1, `reason`='approved' WHERE `id`='$prop_id'");

/*************************************Vendor Approve Mail***************************************/

        ini_set("sendmail_from", "support@staybindass.com");
        $to = $vendor_email; //change receiver address  
        $subject = "Property Status on Staybindass.com";
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
             <p>Dear '.$vendor_name.',</p>
             <p>I am writing to inform you that your property has been approved for listing on StayBindass.com. Congratulations on meeting our listing requirements and thank you for choosing our platform to showcase your property.</p>
             <p>Thank you,</p>
             <p>Team Staybindass.com</p>
         </div>
        </div>
        </div>';
     // $header = "From:info@staybindass.com \r\n";  
 
        $header = "From:support@staybindass.com\r\n";
        $header .= "MIME-Version: 1.0 \r\n";
        $header .= "Content-type: text/html;charset=UTF-8 \r\n";
 
        $result = mail($to, $subject, $message, $header);


            /**************APPROVAL Json**************/


		$query_json = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname,d.slug as destinationslug
		FROM `addproperty` as a 
		left join `home_master` as h on h.id=a.h_type 
		left join `room_master` as r on r.id=a.r_type
		left join `pool_master` as p on p.id=a.pool
		left join `night_master` as n on n.id=a.nights
		left join `destination_master` as d on d.id=a.destination
		left join `city_master` as c on c.id=a.city
		left join `awt_states` as s on s.id=a.state
		WHERE a.deleted != '1' and a.adminApproval='1' and a.villaStatus = '0'");
	
	
		$array_data = array();
	
		while ($getdata_json = mysqli_fetch_object($query_json)) {
	
			$master_data = array(
				'id' => $getdata_json->id,
				'title' => $getdata_json->title,
                'actualtitle' => $getdata_json->actualtitle,
				'slug' => $getdata_json->slug,
				'sale_status' => $getdata_json->sale_status,
				'adminApproval' => $getdata_json->adminApproval,			
				'state' => $getdata_json->statename,			
				'city' => $getdata_json->cityname,
				'address' => $getdata_json->address,
				'home_type' => $getdata_json->homename,
				'room_type' => $getdata_json->roomname,
				'bhk' => $getdata_json->bhk,
				'bhkid' => $getdata_json->bhk_ids,
				'minguest' => $getdata_json->minguest,
				'maxguest' => $getdata_json->maxguest,
				'nights' => $getdata_json->nightname,
				'destination' => $getdata_json->destinationname,
				'destinationslug' => $getdata_json->destinationslug,
				'destinationid' => $getdata_json->destination,
				'propcat' => $getdata_json->propcat,
				'amenities' => $getdata_json->amenities,
				'pool' => $getdata_json->poolname,
				'villaQuantity'=>$getdata_json->villaQuantity,
				'project_status' => $getdata_json->project_status,
				'property_by' => $getdata_json->property_by,
				'overview' => $getdata_json->overview,
				'specification' => $getdata_json->specification,
				'seo_title' => $getdata_json->seo_title,
				'seo_keyword' => $getdata_json->seo_keyword,
				'seo_desc' => $getdata_json->seo_desc,
				'location_link' => $getdata_json->location_link,
				'rules' => $getdata_json->rules,
				'security' => $getdata_json->security,
				'policies' => $getdata_json->policies,
				'shortdesc' => $getdata_json->shortdesc,
				'image' => $getdata_json->uploadimage,
				'latitude' => $getdata_json->latitude,
				'longitude' => $getdata_json->longitude,
			);
			$array_data[] = $master_data;
	
			$final_data = json_encode($array_data);
	
			if (!file_exists('../json/approveProperty')) {
				mkdir('../json/approveProperty', 0777, true);
			}
	
			file_put_contents('../json/approveProperty/approveProperty.json', $final_data);
		}

    }


    

   
}


?>
