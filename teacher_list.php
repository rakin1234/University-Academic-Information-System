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
    $sql = "SELECT TID, TNAME, Salary, Dept from instructor";
    $result = $con->query($sql); 
}
?>

<div class="container">
    <div class="row">
        <div class="data_wrapper">
            
            <a href="<?php echo"add_teacher_form.php";?>" class="btn btn-primary" role="button"><i class='fa fa-plus'></i> Add Teacher</a><br><br>
            
                <table id="table1" class="table table-hover table-bordered">
                <tr style="background: brown;color: #fff;">
                    <th># ID</th>
                    <th># Name</th>
                    <th># Salary</th>
                    <th># Department</th>
					<th># Action</th>
                  
                </tr>
                <?php 
                        
                        while($projects = $result->fetch_assoc()) 
                        {
                            
                        
                    ?>
                <tr style="color:#000;">
                    <td><?php echo $projects['TID']; ?></td>
                    <td><?php echo $projects['TNAME']; ?></td>
                    <td><?php echo $projects['Salary']; ?></td>
                    <td><?php echo $projects['Dept']; ?></td>
                    <td><button name="button" type="button" class="btn btn-primary">Edit</button> 
                    <a href="delete_t.php?id=<?php echo $projects['TID']; ?>" name="button" type="button" class="btn btn-danger">Delete</a></td>
                   
                    
                </tr>
                <?php }?>
            </table>
               
        </div>
    </div>
    
</div>

    



<?php include'footer.php';?>
