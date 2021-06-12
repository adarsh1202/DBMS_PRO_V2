<?php
include '../dbconnection.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
     
    
    $id=$_POST["product_id"];
    //$name=$_POST["product_name"];
    //$category=$_POST["category"];
    $price=$_POST["price"];
    $description="'".$_POST["description"]."'";
    $stock=$_POST["stock"];

    //if part to check if product already exitst




    $product_update_query="UPDATE products SET prod_price=$price,prod_description=$description, prod_availability=$stock where prod_id=$id ";


    $result = mysqli_query($conn, $product_update_query);

    //check if insertion was successful and then proceed

    echo'<script>alert("Product Updated Successfully")</script>';

   
}

?>