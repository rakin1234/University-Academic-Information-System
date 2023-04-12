<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['u_name'];
   
   $ses_sql = mysqli_query($database,"select u_name from user where u_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['u_name'];
   
   if(!isset($_SESSION['u_name'])){
      header("location:login.php");
   }
?>