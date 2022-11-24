<?php 
    require_once("../Settings/db_class.php");


    class service extends db_connection{

        function createService($service_name, $cat_id,$price, $service_image){
            $sql = "INSERT INTO `service`(`service_name`, `cat_id`, `price`, `service_image`) VALUES ('$service_name', '$cat_id','$price','$service_image')";
            return $this->db_query($sql);
        }

        function getAllService(){
            $sql = "SELECT * FROM `service`";
            return $this->db_fetch_all($sql);
        }

        function getAllServiceCat(){
            $sql="SELECT service.s_id , service.service_name, service.service_image ,service.price , categories.cat_name  FROM service,categories WHERE service.cat_id=categories.cat_id ";
            return $this->db_fetch_all($sql);
        }

        function getOneService($s_id){
            $sql = "SELECT * FROM `service` WHERE `s_id`='$s_id' ";
            return $this->db_fetch_one($sql);
        }

        function updateService($s_id, $service_name, $cat_id, $price,$service_image){
            $sql = "UPDATE `service` SET `service_name`='$service_name',`cat_id`=' $cat_id',`price`='$price',`service_image`='$service_image' WHERE `s_id`='$s_id'";
            return $this->db_query($sql);
        }

        function deleteService($s_id){
            $sql = "SELECT * FROM `service` WHERE `s_id`='$s_id' ";
            return $this->db_query($sql);
        }

        function createCategories($cat_name){
            $sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name') ";
            return $this->db_query($sql);

        }

        function getAllCategory(){
            $sql = "SELECT * FROM `categories` ";
            return $this->db_fetch_all($sql);

        }
    }


?>