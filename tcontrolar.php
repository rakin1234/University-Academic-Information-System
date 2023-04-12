<?php
include 'config.php';

$con=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Server Error");
mysqli_select_db($con,"nsu") or die("Database error");

if($con==true)
{
    //echo $_POST["fm"];
//basic_info
   $tid=$_POST["tid"]; 
   $n=$_POST["n"]; 
   $sal=$_POST["sal"];
   $dept=$_POST["dept"]; 
   $status='1';
    
     $sql = "INSERT INTO instructor (TID,TNAME,Salary,Dept)
        VALUES ('$tid', '$n', '$sal','$dept')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            header("location: teacher_list.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    
}
    
else
{
    mysqli_close($con);
}
?>