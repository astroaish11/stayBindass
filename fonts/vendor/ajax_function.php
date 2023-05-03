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

if(isset($_POST['statusid'])) 
{
    $statusid= $_POST['statusid'];
    $query= mysqli_query($conn,"SELECT * FROM `awt_user` WHERE `id`='$statusid'");
    
    $num=mysqli_num_rows($query);
    if($num == 1)
    {
        $row=mysqli_fetch_object($query);
        $status=$row->status;
        $id=$row->id;
        if($status == 1)
        {
            $chkwish = mysqli_query($conn,"UPDATE `awt_user` SET `status`= 0 WHERE `id`='$id'");
        } else {
            $chkwish = mysqli_query($conn,"UPDATE `awt_user` SET `status`= 1 WHERE `id`='$id'");
        }
    }
}
?>
