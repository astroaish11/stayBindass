<?php

include('config.php');


$cdate = date('d-m-Y');

/* Villa Disable Status  */

if (isset($_POST['villastatusid'])) {
//disable_BY = 0 (admin disbale and villa status 0 means display)

	$cdate = date('Y-m-d');
	$disablestatusid = $_POST['villastatusid'];

	$get_data_disable = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `id`='$disablestatusid'and deleted !=1");

	$num_villa = mysqli_num_rows($get_data_disable);
	$getdisablevilla = mysqli_fetch_object($get_data_disable);

	$disablestatus1 = $getdisablevilla->villaStatus;
	$disableid = $getdisablevilla->id;
	if ($num_villa == 1) {

		if ($disablestatus1 == 1) {

			mysqli_query($sql, "UPDATE `addproperty` SET `disable_by` = 0,`disable_date` = '$cdate',`villaStatus`= 0 WHERE `id`='$disableid'");

			echo"success";

		} else {

			mysqli_query($sql, "UPDATE `addproperty` SET `disable_by` = 0,`disable_date` = '$cdate',`villaStatus`= 1 WHERE `id`='$disableid'");

		}
	}

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
	WHERE a.deleted != '1' and a.adminApproval = '1' and a.villaStatus!='1'");


	$array_data = array();

	while ($getdata_json = mysqli_fetch_object($query_json)) {

		$master_data = array(
			'id' => $getdata_json->id,
			'title' => $getdata_json->title,
			'slug' => $getdata_json->slug,
			'propcat_ids' => $getdata_json->propcat_ids,
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
			'destinationslug' => $getdata_json->destinationslug,
			'propcat' => $getdata_json->propcat,
			'amenities' => $getdata_json->amenities,
			'pool' => $getdata_json->poolname,
			'villaQuantity' => $getdata_json->villaQuantity,
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
/***********************************Sale Json*********************************************/

$query_json = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname,d.slug as destinationslug
FROM `addproperty` as a 
left join `home_master` as h on h.id=a.h_type 
left join `room_master` as r on r.id=a.r_type
left join `pool_master` as p on p.id=a.pool
left join `night_master` as n on n.id=a.nights
left join `destination_master` as d on d.id=a.destination
left join `city_master` as c on c.id=a.city
left join `awt_states` as s on s.id=a.state
WHERE a.deleted != '1' and a.sale_status = '1' and a.adminApproval = '1' and a.villaStatus!='1'");


$array_data = array();

while ($getdata_json = mysqli_fetch_object($query_json)) {

	$master_data = array(
		'id' => $getdata_json->id,
		'villaStatus' => $getdata_json->villaStatus,
		'title' => $getdata_json->title,
		'slug' => $getdata_json->slug,
		'sale_status' => $getdata_json->sale_status,
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
		'villaQuantity' => $getdata_json->villaQuantity,
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
		'adminApproval' => $getdata_json->adminApproval
	);
	$array_data[] = $master_data;

	$final_data = json_encode($array_data);

	if (!file_exists('../json/saleproperty')) {
		mkdir('../json/saleproperty', 0777, true);
	}

	file_put_contents('../json/saleproperty/saleproperty.json', $final_data);
	echo "hello";
}
	
}



/*Offer STATUS */

if (isset($_POST['offerStatusid'])) {

	$offerid = $_POST['offerStatusid'];
	$query_offer = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `id`='$offerid' and deleted !=1");

	$numoffer = mysqli_num_rows($query_offer);
	if ($numoffer == 1) {
		$offerRow = mysqli_fetch_object($query_offer);
		$status1 = $offerRow->sale_status;
		$offerid = $offerRow->id;

		if ($status1 == 1) {
			mysqli_query($sql, "UPDATE `addproperty` SET `sale_status`= 0 WHERE `id`='$offerid'and deleted !=1");
		} else {
			mysqli_query($sql, "UPDATE `addproperty` SET `sale_status`= 1 WHERE `id`='$offerid'and deleted !=1");
		}


	}

}




/*SALE STATUS */

if (isset($_POST['salestatusid'])) {

	$statusid1 = $_POST['salestatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `id`='$statusid1' and deleted !=1");

	$num1 = mysqli_num_rows($query_statusid);
	if ($num1 == 1) {
		$row1 = mysqli_fetch_object($query_statusid);
		$status1 = $row1->sale_status;
		$id1 = $row1->id;
		if ($status1 == 1) {
			mysqli_query($sql, "UPDATE `addproperty` SET `sale_status`= 0 WHERE `id`='$id1'and deleted !=1");
		} else {
			mysqli_query($sql, "UPDATE `addproperty` SET `sale_status`= 1 WHERE `id`='$id1'and deleted !=1");
		}

/***********************************Sale Json*********************************************/

		$query_json = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname,d.slug as destinationslug
		FROM `addproperty` as a 
		left join `home_master` as h on h.id=a.h_type 
		left join `room_master` as r on r.id=a.r_type
		left join `pool_master` as p on p.id=a.pool
		left join `night_master` as n on n.id=a.nights
		left join `destination_master` as d on d.id=a.destination
		left join `city_master` as c on c.id=a.city
		left join `awt_states` as s on s.id=a.state
		WHERE a.deleted != '1' and a.sale_status = '1' and a.adminApproval = '1' and a.villaStatus!='1'");


		$array_data = array();

		while ($getdata_json = mysqli_fetch_object($query_json)) {

			$master_data = array(
				'id' => $getdata_json->id,
				'villaStatus' => $getdata_json->villaStatus,
				'title' => $getdata_json->title,
				'slug' => $getdata_json->slug,
				'sale_status' => $getdata_json->sale_status,
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
				'villaQuantity' => $getdata_json->villaQuantity,
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
				'adminApproval' => $getdata_json->adminApproval
			);
			$array_data[] = $master_data;

			$final_data = json_encode($array_data);

			if (!file_exists('../json/saleproperty')) {
				mkdir('../json/saleproperty', 0777, true);
			}

			file_put_contents('../json/saleproperty/saleproperty.json', $final_data);
			echo "hello";
		}
	}




}

/**************APPROVAL STATUS**************/

if (isset($_POST['approveStatusid'])) {

	$approvalid1 = $_POST['approveStatusid'];
	$query_approvalid = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `id`='$approvalid1'and deleted !=1");

	$num2 = mysqli_num_rows($query_approvalid);
	if ($num2 == 1) {
		$row2 = mysqli_fetch_object($query_approvalid);

		$status2 = $row2->adminApproval;

		$id2 = $row2->id;
		if ($status2 == 1) {
			mysqli_query($sql, "UPDATE `addproperty` SET `adminApproval`= 0 WHERE `id`='$id2'and deleted !=1");
		} else {
			mysqli_query($sql, "UPDATE `addproperty` SET `adminApproval`= 1 WHERE `id`='$id2'and deleted !=1");
		}


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
		WHERE a.deleted != '1' and a.adminApproval = '1' and a.villaStatus!='1'");


		$array_data = array();

		while ($getdata_json = mysqli_fetch_object($query_json)) {

			$master_data = array(
				'id' => $getdata_json->id,
				'title' => $getdata_json->title,
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
				'destinationslug' => $getdata_json->destinationslug,
				'propcat' => $getdata_json->propcat,
				'amenities' => $getdata_json->amenities,
				'pool' => $getdata_json->poolname,
				'villaQuantity' => $getdata_json->villaQuantity,
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
				'propcat_ids' => $getdata_json->propcat_ids,
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


/**************Slug**************/


if (isset($_POST['generateSlug'])) {

	$title = $_POST['generateSlug'];

	$slug = strtolower(str_replace(" ", "-", $title));

	$slug = preg_replace('/[^a-zA-Z0-9-_\.]/', '', $slug);

	$getcount = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `slug` like '$slug%'and deleted !=1");

	if (mysqli_num_rows($getcount) > 0) {

		$thecount = mysqli_num_rows($getcount) - 1;

		$newcount = $thecount + 1;

		$slug1 = $slug . '-' . $newcount;

		echo $slug1;

	} else {

		$slug = $slug;

		echo $slug;
	}

}

/**************BlogSlug**************/


if (isset($_POST['generateBlogSlug'])) {

	$title = $_POST['generateBlogSlug'];

	$slug = strtolower(str_replace(" ", "-", $title));

	$slug = preg_replace('/[^a-zA-Z0-9-_\.]/', '', $slug);

	$getcount = mysqli_query($sql, "SELECT * FROM `awt_blog` WHERE `slug` like '$slug%'");

	if (mysqli_num_rows($getcount) > 0) {

		$thecount = mysqli_num_rows($getcount) - 1;

		$newcount = $thecount + 1;

		$slug1 = $slug . '-' . $newcount;

		echo $slug1;

	} else {

		$slug = $slug;

		echo $slug;
	}

}

/**************DestinationSlug**************/


if (isset($_POST['generatedestinationSlug'])) {

	$title = $_POST['generatedestinationSlug'];

	$slug = strtolower(str_replace(" ", "-", $title));

	$slug = preg_replace('/[^a-zA-Z0-9-_\.]/', '', $slug);

	$getcount = mysqli_query($sql, "SELECT * FROM `destination_master` WHERE `slug` like '$slug%'");

	if (mysqli_num_rows($getcount) > 0) {

		$thecount = mysqli_num_rows($getcount) - 1;

		$newcount = $thecount + 1;

		$slug1 = $slug . '-' . $newcount;

		echo $slug1;

	} else {

		$slug = $slug;

		echo $slug;
	}

}

/**************City Dropdown**************/


if (isset($_POST['generateCityDropdown'])) {

	$sid = $_POST['generateCityDropdown'];

	$query31 = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `state`='$sid' and city_status != 1 and deleted !=1");

	while ($listdata = mysqli_fetch_object($query31)) {

		echo '<option value="' . $listdata->id . '"';
		echo '>' . $listdata->city . '</option>';

	}

}

/**************Lattitude longitude**************/

if (isset($_POST['generatelatlong'])) {

	$cid = $_POST['generatelatlong'];

	
	$querylat = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `id`='$cid' and city_status != 1 and deleted !=1");

	$listlat = mysqli_fetch_object($querylat);

	$latitude = $listlat->latitude;
	$longitude = $listlat->longitude;

	$arr = array('latitude' => $latitude, 'longitude' => $longitude);
	echo json_encode($arr)."\n";

}





?>