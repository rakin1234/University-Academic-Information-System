<?php 
include 'config.php';
include('session.php');
$con=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Server Error");
mysqli_select_db($con,"nsu") or die("Database error");

if($con==true)
{
//get id
   $id=$_GET["id"];
   // echo $id;

    // sql to delete a record
$sql = "DELETE FROM course WHERE C_id='$id'";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
     header("location: course_list.php");
} else {
    echo "Error deleting record: " . $con->error;
}
   
}
else{
    mysqli_close($con);
}
?>