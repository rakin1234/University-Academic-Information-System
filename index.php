
<?php
//include 'config.php';
include('session.php');
$con=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Server Error");
mysqli_select_db($con,"nsu") or die("Database error");

if($con==true)
{
    
    include 'login.php';
    
}
else
{
    mysqli_close($con);
}
?>