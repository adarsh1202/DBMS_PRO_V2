
<?php

// $showAlert = false; 
// $showError = false; 
// $exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'dbconnection.php';      
     
    
    $name=$_POST["emp_name"];
    $contact=$_POST["contact"];
    $leave_date="'".$_POST["emp_leaving_date"]."'";      
    echo $leave_date;


    $sql = "SELECT * from employees where emp_name='$name' and emp_phno='$contact'";
    

    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num > 0) 
    {
        $delete_employee_query="UPDATE employees SET emp_leaving_date= $leave_date WHERE emp_name='$name' and emp_phno='$contact'";
        $result = mysqli_query($conn, $delete_employee_query);
    
        echo "Employee removed successfully";
    }// end if 
    

    else
    {
        echo "Employee does not exist";
    }

    
}//end if   
    
?>

