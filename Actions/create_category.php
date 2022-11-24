<?php 
    require_once("../Controllers/service_controller.php");

    $cat_name = $_GET['cat_name'];

    $result = createCategories_ctr($cat_name);

    if($result){
        header("location: ../view/index.php");
    }

?>