<?php

include '../dbconnection.php'; 

//product_ids
$product_ids=$_GET["product_id"];
print($product_ids);

//product_quantities
$product_quantities=$_GET["product_quantity"];
print($product_quantities);


//calculate bill amount
$bill_amount=0;

for($i=0;$i<count($product_ids);$i++){
    $get_product_price_query="SELECT prod_price FROM `products` WHERE `prod_id`=".$product_ids[$i];
    print($get_product_price_query);
    
}





















// $insert_into_orders_query="INSERT INTO `orders`(`cust_id`,`order_date`,`bill_amount`,``)"

//     $last_order_id="SELECT max(order_id) FROM orders";
    
//     $result = mysqli_query($conn,$last_order_id);


//     $num = mysqli_num_rows($result); 


// if($num == 1)
// {   
//     $order_details=mysqli_fetch_assoc($result);

//         $order_id=$order_details["max(order_id)"];

// }



// $insert_order_details="INSERT INTO `order_details`(`order_id`,`prod_id`,`quantity`) VALUES($order_id,$product_id,$product_quantity)";
    
// $result = mysqli_query($conn,$insert_order_details);

// //if condition to check if succesfuuly inserted




?>