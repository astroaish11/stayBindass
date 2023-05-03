<?php 

include('config.php');

if(isset($_POST['generateSlug'])) {

	$title = $_POST['generateSlug'];
	
	$slug = strtolower(str_replace(" ","-",$title));
	 
	$slug = preg_replace('/[^a-zA-Z0-9-_\.]/','', $slug);
	 
	$getcount = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `slug` like '$slug%'");
	 
	if(mysqli_num_rows($getcount) > 0){
	   
	   $thecount = mysqli_num_rows($getcount)-1;
	   
	   $newcount = $thecount + 1;
	   
	   $slug1 = $slug.'-'.$newcount;
	   
	   echo $slug1;
	   
	}else{
	 
	     $slug = $slug;
		
		echo $slug;
	}

}

if(isset($_POST['generateBlogSlug'])) {

	$title = $_POST['generateBlogSlug'];
	
	$slug = strtolower(str_replace(" ","-",$title));
	 
	$slug = preg_replace('/[^a-zA-Z0-9-_\.]/','', $slug);
	 
	$getcount = mysqli_query($sql, "SELECT * FROM `awt_blog` WHERE `slug` like '$slug%'");
	 
	if(mysqli_num_rows($getcount) > 0){
	   
	   $thecount = mysqli_num_rows($getcount)-1;
	   
	   $newcount = $thecount + 1;
	   
	   $slug1 = $slug.'-'.$newcount;
	   
	   echo $slug1;
	   
	}else{
	 
	     $slug = $slug;
		
		echo $slug;
	}

}

if(isset($_POST['generatedestinationSlug'])) {

	$title = $_POST['generatedestinationSlug'];
	
	$slug = strtolower(str_replace(" ","-",$title));
	 
	$slug = preg_replace('/[^a-zA-Z0-9-_\.]/','', $slug);
	 
	$getcount = mysqli_query($sql, "SELECT * FROM `destination_master` WHERE `slug` like '$slug%'");
	 
	if(mysqli_num_rows($getcount) > 0){
	   
	   $thecount = mysqli_num_rows($getcount)-1;
	   
	   $newcount = $thecount + 1;
	   
	   $slug1 = $slug.'-'.$newcount;
	   
	   echo $slug1;
	   
	}else{
	 
	     $slug = $slug;
		
		echo $slug;
	}

}


if(isset($_POST['generateCityDropdown'])) {

	$sid = $_POST['generateCityDropdown'];
	 
	$query31 = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `state`='$sid'");
	 
	while ($listdata = mysqli_fetch_object($query31)) {

        echo '<option value="' . $listdata->id . '"';
        echo '>' . $listdata->city . '</option>';

    }

}

if(isset($_POST['villastatusid'])) 
{
    $statusid= $_POST['villastatusid'];
    $query= mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `id`='$statusid'");
    
    $num=mysqli_num_rows($query);
    if($num == 1)
    {
        $row=mysqli_fetch_object($query);
        $status=$row->villaStatus;
        $id=$row->id;
        if($status == 1)
        {
            $chkwish = mysqli_query($sql,"UPDATE `addproperty` SET `villaStatus`= 0 WHERE `id`='$id'");
        } else {
            $chkwish = mysqli_query($sql,"UPDATE `addproperty` SET `villaStatus`= 1 WHERE `id`='$id'");
        }
    }

	      /**************APPROVAL Json**************/


		$query_json = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname
		FROM `addproperty` as a 
		left join `home_master` as h on h.id=a.h_type 
		left join `room_master` as r on r.id=a.r_type
		left join `pool_master` as p on p.id=a.pool
		left join `night_master` as n on n.id=a.nights
		left join `destination_master` as d on d.id=a.destination
		left join `city_master` as c on c.id=a.city
		left join `awt_states` as s on s.id=a.state
		WHERE a.deleted != '1' and a.adminApproval='1' and villaStatus = '0'");
	
	
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
?>
