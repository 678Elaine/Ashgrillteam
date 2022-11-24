<?php
//connect to the user account class
include("../Classes/service_class.php");


function createService_ctr($service_name, $cat_id,$price, $service_image)
{
    $insertservice= new service();

    return $insertservice->createService($service_name, $cat_id,$price, $service_image);
}

function getAllService_ctr()
{
    $selectservice= new service();

    return $selectservice->getAllService();
}


function updateService_ctr($s_id, $service_name, $cat_id, $price,$service_image)
{
    $updateservice= new service();

    return $updateservice->updateService($s_id, $service_name, $cat_id, $price,$service_image);
}

function   deleteService_ctr($s_id)
{
    $selectservice= new service;

    return $selectservice->deleteService($s_id);
}

function getOneService_ctr($s_id){
    $selectservice= new service;

    return $selectservice->getOneService($s_id);
}

function createCategories_ctr($cat_name){
    $cat = new service;
    return $cat->createCategories($cat_name);
}



function getAllCategory_ctr(){
    $cat = new service;
    return $cat->getAllCategory();

}











?>