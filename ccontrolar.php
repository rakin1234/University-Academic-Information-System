<?php
include 'config.php';

$con=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Server Error");
mysqli_select_db($con,"nsu") or die("Database error");

if($con==true)
{
    //echo $_POST["fm"];
//basic_info
   $C_id=$_POST["C_id"]; 
   $Course_Title=$_POST["Course_Title"]; 
   $Credit_hour=$_POST["Credit_hour"];
   $Semester=$_POST["Semester"];
   $Faculty = $_POST["Faculty"];
   $status='1';
    
     $sql = "INSERT INTO course (C_id,Course_Title,Credit_hour,Semester, Faculty)
        VALUES ('$C_id', '$Course_Title', '$Credit_hour','$Semester', '$Faculty')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            header("location: course_list.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    
}
    
else
{
    mysqli_close($con);
}
?>