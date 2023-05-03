<?php
if (isset($_GET['slug'])) {

     $urlslug = trim($_GET['slug']);
     $urlslug = mysqli_real_escape_string($sql, $urlslug);

     $query = mysqli_query($sql, "SELECT * from `destination_master` where `slug`='$urlslug'");
     $getdata1 = mysqli_fetch_object($query);
    // $getids = $getdata1->id;

      // $selectdata = mysqli_query($sql,"SELECT a.title,a.uploadimage,a.slug,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname, p.pool as poolname from `addproperty` as a left join `city_master` as c on c.id=a.city left join `awt_states` as s on s.id=a.state left join `home_master` as h on h.id=a.h_type left join `room_master` as r on r.id=a.r_type left join `pool_master` as p on p.id=a.pool where a.destination = '$getids'");

     // $count = mysqli_num_rows($selectdata);

      $getids= $getdata1->id;
      $addproperty_json = 'json/addproperty/addproperty.json';

     if(file_exists($addproperty_json)) {
          $data = file_get_contents($addproperty_json);
          $addproperty_data = json_decode($data,true);

          $resources = array_filter($addproperty_data, function ($var) use ($getids) {
               return ($var['destinationid'] == $getids);
           });

        //  print_r($resources);

          $message = "<h3 class='text-success'>JSON file data</h3>";

     } else {

          $message = "<h3 class='text-danger'>JSON file Not found</h3>";
     }

       $count = count($resources);
      // echo $count."=data json count";




}
    //List BHK json

    $bhk_master_json = 'json/bhk_master/bhk_master.json';

    if (file_exists($bhk_master_json)) {
         $data = file_get_contents($bhk_master_json);
         $bhk_master_data = json_decode($data);

         $message = "<h3 class='text-success'>JSON file data</h3>";

    } else {

         $message = "<h3 class='text-danger'>JSON file Not found</h3>";
    }
















?>