<?php 
include('session.php');
include'header.php';?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        
            <center><h2>Course Addition Form</h2></center>
    <form action="ccontrolar.php" method="post" enctype="multipart/form-data">
			  
			   cid:<input type=text name="C_id">
			   cname:<input type=text, name="Course_Title">
			   credit:<input type="number" name="Credit_hour">
			   sem:<input type=text, name = "Semester">
			   fac:<input type=text, name = "Faculty">
        <br><br>
   <button name="submit" type="submit" class="btn btn-success">Submit</button> <button name="reset" type="reset" class="btn btn-warning">Reset</button>
</form>
        
        </div>
    </div>
    
</div>

<?php include'footer.php';?>