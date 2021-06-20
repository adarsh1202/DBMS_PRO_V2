<?php
include '../dbconnection.php';      
// $showAlert = false; 
// $showError = false; 
// $exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
     

    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
            
    $cpassword="admin";


    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database

        if($password == $cpassword  && $username == "admin") {

            header("Location: http://localhost/DBMS_PRO/PROJECT/FE/adminInterface.html");
         }  
    
   else 
   {
      echo'<script>alert("Incorrect Credentials")</script>';

   } 
    
}//end if   
    
?>
