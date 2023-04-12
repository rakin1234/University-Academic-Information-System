<?php 
include('session.php');
include'header.php';?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        
            <center><h2>Teacher Application Form</h2></center>
    <form action="tcontrolar.php" method="post" enctype="multipart/form-data">
			  
			   Tid:<input type="number" name="tid">
			   TName:<input type=text, name="n">
			   Salary:<input type="number" name="sal">
			   Dept:<input type=text, name = "dept">
        <br><br>
   <button name="submit" type="submit" class="btn btn-success">Submit</button> <button name="reset" type="reset" class="btn btn-warning">Reset</button>
</form>
        
        </div>
    </div>
    
</div>

<?php include'footer.php';?>