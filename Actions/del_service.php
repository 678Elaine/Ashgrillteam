<?php
//making action  aware of controller
include("../Controllers/service.php");

//collect form data


if(isset($_POST['delete'])){
	$s_id=$_POST['s_id'];
$img=$_POST['service_image'];
if(unlink("../Images/service/".$img)){
	if(delete_service_ctr($s_id)==TRUE){

			header('Location:../View/services.php');
		}

else{
	echo "Unable to delete image";
}
}
else if(!unlink("../images/adverts/".$img)){
	if(delete_service_ctr($s_id)==TRUE){

			header('Location:../Admin/service.php');
		}
}
}


else{
	header('Location:../Admin/service.php');
}


?>