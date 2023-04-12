<?php
include 'config.php';

$con=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Server Error");
mysqli_select_db($con,"nsu") or die("Database error");

if($con==true)
{
    //echo $_POST["fm"];
//basic_info
   $fm=$_POST["fm"]; 
   $mn=$_POST["mn"]; 
   $ln=$_POST["ln"];
   $ma=$_POST["ma"];
    $fam=$_POST["fam"];
//present address
   $hno=$_POST["hno"]; 
   $loc=$_POST["loc"]; 
   $vill=$_POST["vill"]; 
   $Thana=$_POST["Thana"]; 
   $dist=$_POST["dist"]; 
   $postc=$_POST["postc"]; 
//permanent address 
   $hno_t=$_POST["hno_t"]; 
   $loc_t=$_POST["loc_t"]; 
   $vill_t=$_POST["vill_t"]; 
   $Thana_t=$_POST["Thana_t"]; 
   $dist_t=$_POST["dist_t"]; 
   $postc_t=$_POST["postc_t"];
    
   $dob=$_POST["dob"]; 
//jsc
   $j_inst=$_POST["j_inst"]; 
   $j_bord=$_POST["j_bord"];
   $j_yr=$_POST["j_yr"];
   $j_reslt=$_POST["j_reslt"];
//ssc
   $s_inst=$_POST["s_inst"];
   $s_bord=$_POST["s_bord"];
   $s_yr=$_POST["s_yr"];
   $s_reslt=$_POST["s_reslt"];
//hsc
   $h_inst=$_POST["h_inst"];
   $h_bord=$_POST["h_bord"];
   $h_yr=$_POST["h_yr"];
   $h_reslt=$_POST["h_reslt"];
    
   $status='1';
    
     $sql = "INSERT INTO student (First_name,Middle_name,Last_name,Mother_name,Father_name,DOB,Pr_house_no,Pr_location,Pr_village,Pr_Thana,Pr_District,Pr_Post_Code,Pe_house_no ,Pe_location,Pe_Village,Pe_Thana,Pe_District,Pe_Post_Code,Jsc_Institute,Jsc_Board,Jsc_Year,Jsc_Result,Ssc_Institute,Ssc_Board,Ssc_Year,Ssc_Result,Hsc_Institute,Hsc_Board,Hsc_Year,Hsc_Result,stdnt_status)
        VALUES ('$fm', '$mn', '$ln','$ma','$fam','$dob','$hno','$loc','$vill','$Thana','$dist','$postc','$hno_t','$loc_t','$vill_t','$Thana_t','$dist_t','$postc_t','$j_inst','$j_bord','$j_yr','$j_reslt','$s_inst','$s_bord','$s_yr','$s_reslt','$h_inst','$h_bord','$h_yr','$h_reslt','$status')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            header("location: student_list.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    
}
    
else
{
    mysqli_close($con);
}
?>