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
    $sql = "SELECT C_id, Course_Title, Credit_hour, Semester, Faculty from course";
    $result = $con->query($sql); 
}
?>

<div class="container">
    <div class="row">
        <div class="data_wrapper">
            
            <a href="<?php echo"add_course_form.php";?>" class="btn btn-primary" role="button"><i class='fa fa-plus'></i> Add Course</a><br><br>
            
                <table id="table1" class="table table-hover table-bordered">
                <tr style="background: brown;color: #fff;">
                    <th># ID</th>
                    <th># Title</th>
                    <th># hour</th>
                    <th># semester</th>
					<th># faculty</th>
					<th># Action</th>
                  
                </tr>
                <?php 
                        
                        while($projects = $result->fetch_assoc()) 
                        {
                            
                        
                    ?>
                <tr style="color:#000;">
                    <td><?php echo $projects['C_id']; ?></td>
                    <td><?php echo $projects['Course_Title']; ?></td>
                    <td><?php echo $projects['Credit_hour']; ?></td>
                    <td><?php echo $projects['Semester']; ?></td>
					<td><?php echo $projects['Faculty']; ?></td>
                    <td><button name="button" type="button" class="btn btn-primary">Edit</button> 
                    <a href="delete_c.php?id=<?php echo $projects['C_id']; ?>" name="button" type="button" class="btn btn-danger">Delete</a></td>
                   
                    
                </tr>
                <?php }?>
            </table>
               
        </div>
    </div>
    
</div>

    



<?php include'footer.php';?>
