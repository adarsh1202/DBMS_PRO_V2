<html lang="en">
    <head>
    
        <!-- Required meta tags --> 
        <meta charset="utf-8"> 
        <meta name="viewport" content=
            "width=device-width, initial-scale=1, 
            shrink-to-fit=no">
        
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity=
    "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">  


            <script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
</script>
    
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous">
</script>
    
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous">
</script> 

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    </head>


<body>


<?php

include 'dbconnection.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    
    




$username = $_POST["username"]; 
$password = $_POST["password"]; 



$loginQuery="select * from customer_login  where username='$username' and password='$password'";

$result = mysqli_query($conn, $loginQuery);

$row = mysqli_fetch_assoc($result);

$id=$row["cust_id"];

//echo $id;
}
?>


    <div class="container my-4 ">
        <h1 class="text-center">Login Here</h1> 

        
    
        <button type="button" class="btn btn-primary"><a href="http://localhost/DBMS_PRO/PROJECT/BE/ORDERS/orderHistory.php?id=<?php echo $id;?>" style="color: white;"><i class="fa fa-history" aria-hidden="true"></i> Order History</a>
            
            </button> 


        <button type="button" class="btn btn-primary"><a href="http://localhost/DBMS_PRO/PROJECT/BE/ORDERS/createOrder.php?id=<?php echo $id;?>" style="color: white;"><i class="fa fa-plus-circle" aria-hidden="true"></i>     Create Order</a>
            
        </button> 
        
    </div>
    
   

  

   







</body>
</html>