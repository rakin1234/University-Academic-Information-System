<?php
include 'config.php';

$con=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Server Error");
mysqli_select_db($con,"nsu") or die("Database error");

if($con==true)
{
    //echo $_POST["fm"];
//basic_info
   $D_id=$_POST["D_id"]; 
   $DName=$_POST["DName"]; 
   $location=$_POST["location"];
   $Chair=$_POST["Chair"];
   $status='1';
    
     $sql = "INSERT INTO department (D_id,DName,location,Chair)
        VALUES ('$D_id', '$DName', '$location','$Chair')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            header("location: department_list.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    
}
    
else
{
    mysqli_close($con);
}
?>