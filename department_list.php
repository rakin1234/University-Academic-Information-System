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
    $sql = "SELECT D_id, DName, location, Chair from department";
    $result = $con->query($sql); 
}
?>

<div class="container">
    <div class="row">
        <div class="data_wrapper">
            
            <a href="<?php echo"add_department_form.php";?>" class="btn btn-primary" role="button"><i class='fa fa-plus'></i> Add Department</a><br><br>
            
                <table id="table1" class="table table-hover table-bordered">
                <tr style="background: brown;color: #fff;">
                    <th># ID</th>
                    <th># name</th>
                    <th># loc</th>
                    <th># chair</th>
					<th># Action</th>
                  
                </tr>
                <?php 
                        
                        while($projects = $result->fetch_assoc()) 
                        {
                            
                        
                    ?>
                <tr style="color:#000;">
                    <td><?php echo $projects['D_id']; ?></td>
                    <td><?php echo $projects['DName']; ?></td>
                    <td><?php echo $projects['location']; ?></td>
                    <td><?php echo $projects['Chair']; ?></td>
                    <td><a href="Edit.php?id=<?php echo $projects['D_id']; ?>" name="buttoon" type="button" class="btn btn-danger">Edit</a> 
                    <a href="delete_d.php?id=<?php echo $projects['D_id']; ?>" name="button" type="button" class="btn btn-danger">Delete</a></td>
                   
                    
                </tr>
                <?php }?>
            </table>
               
        </div>
    </div>
    
</div>

    



<?php include'footer.php';?>
