<?php

include '../dbconnection.php'; 

//product_ids
$product_ids=explode(",",$_GET["product_id"]);


//prduct_quantities
$product_quantities=explode(",",$_GET["product_quantity"]);


//customer id
//$cust_id=$_GET["cust_id"];
$cust_id="1";


//calculate bill amount
$bill_amount=0;

for($i=0;$i<count($product_ids);$i++){

    $get_product_price_query="SELECT `prod_price` FROM `products` WHERE `prod_id`=".$product_ids[$i];
    
    $result=mysqli_query($conn,$get_product_price_query);
    
    $num = mysqli_num_rows($result); 

    if($num == 1)
        {
            $prouct_details=mysqli_fetch_assoc($result);
            $price=$prouct_details["prod_price"];
            $bill_amount=$bill_amount+($price*$product_quantities[$i]);
        }

}

//get current date
$date=date("Y-m-d");

 $insert_into_orders_query="INSERT INTO `orders`(`cust_id`,`order_date`,`bill_amount`) VALUES ('$cust_id','$date','$bill_amount')";

 print($insert_into_orders_query);

 $result=mysqli_query($conn,$insert_into_orders_query);

 




?>