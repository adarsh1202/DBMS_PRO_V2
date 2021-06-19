<?php

include 'dbconnection.php'; 


    $last_order_id="SELECT max(order_id) FROM orders";
    
    $result = mysqli_query($conn,$last_order_id);


    $num = mysqli_num_rows($result); 


if($num == 1)
{   
    $order_details=mysqli_fetch_assoc($result);

        $order_id=$order_details["max(order_id)"];
}

$product_id=$_GET["product_id"];
$product_quantity=$_GET["product_quantity"];

$insert_order_details="INSERT INTO `order_details`(`order_id`,`prod_id`,`quantity`) VALUES($order_id,$product_id,$product_quantity)";
    
$result = mysqli_query($conn,$insert_order_details);





?>