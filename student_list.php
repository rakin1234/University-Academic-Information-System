<?php 
include('session.php');
include'header.php';
?>
<?php 
$con=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Server Error");
mysqli_select_db($con,"nsu") or die("Database error");

if($con==true)
{
   
     
     // fetch data from the database
    $sql = "SELECT ID,First_name,Middle_name,Last_name,Mother_name,Father_name,DOB,Pr_house_no,Pr_location,Pr_village,Pr_Thana,Pr_District,Pr_Post_Code,Pe_house_no ,Pe_location,Pe_Village,Pe_Thana,Pe_District,Pe_Post_Code,Jsc_Institute,Jsc_Board,Jsc_Year,Jsc_Result,Ssc_Institute,Ssc_Board,Ssc_Year,Ssc_Result,Hsc_Institute,Hsc_Board,Hsc_Year,Hsc_Result,stdnt_status from student";
    $result = $con->query($sql); 
}
?>

<div class="container">
    <div class="row">
        <div class="data_wrapper">
            
            <a href="<?php echo"add_student_frm.php";?>" class="btn btn-primary" role="button"><i class='fa fa-plus'></i> Add Student</a><br><br>
            
                <table id="table1" class="table table-hover table-bordered">
                <tr style="background: brown;color: #fff;">
                    <th># ID</th>
                    <th># Name</th>
                    <th># Father</th>
                    <th># Mother</th>
                    <th># Address</th>
                    <th># District</th>
                    <th># JSC Result</th>
                    <th># SSC Result</th>
                    <th># HSC result</th>
                    <th># Action</th>
                  
                </tr>
                <?php 
                        
                        while($projects = $result->fetch_assoc()) 
                        {
                            
                        
                    ?>
                <tr style="color:#000;">
                    <td><?php echo $projects['ID']; ?></td>
                    <td><?php echo $projects['First_name']; ?></td>
                    <td><?php echo $projects['Father_name']; ?></td>
                    <td><?php echo $projects['Mother_name']; ?></td>
                    <td><?php echo $projects['Pr_location']; ?></td>
                    <td><?php echo $projects['Pr_District']; ?></td>
                    <td><?php echo $projects['Jsc_Result']; ?></td>
                    <td><?php echo $projects['Ssc_Result']; ?></td>
                    <td><?php echo $projects['Hsc_Result']; ?></td>
                    <td><button name="Button1" type="button" class="btn btn-primary">Edit</button>
					<a href="delete_s.php?id=<?php echo $projects['ID']; ?>" name="button" type="button" class="btn btn-danger">Delete</a></td>
                   
                    
                </tr>
                <?php }?>
            </table>
               
        </div>
    </div>
    
</div>

    



<?php include'footer.php';?>
