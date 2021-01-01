<?php

if (!empty($_POST['ready'])) {
    $link = mysqli_connect("lamp.soton.ac.uk", "MANG6180_student",
 "tintin1830", "mgmt_webapp_msc"); 
	
	$sql = "SELECT photographer_id, CONCAT(photographers.last_name, ', ', photographers.first_name) AS name, address, postcode, email, phone FROM  photographers";
   $result = mysqli_query($link, $sql);
	
	//die();
	$con = [];
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		
		array_push($con,$row);
	}
	
    $con = json_encode($con);
    print_r($con);
}

?>
