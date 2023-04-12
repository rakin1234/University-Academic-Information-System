<?php 
include('session.php');
include'header.php';?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        
            <center><h2>Department Addition Form</h2></center>
    <form action="dcontrolar.php" method="post" enctype="multipart/form-data">
			  
			   did:<input type="number" name="D_id">
			   dname:<input type=text, name="DName">
			   LOCATION:<input type=text name="location">
			   chr:<input type=text, name = "Chair">
        <br><br>
   <button name="submit" type="submit" class="btn btn-success">Submit</button> <button name="reset" type="reset" class="btn btn-warning">Reset</button>
</form>
        
        </div>
    </div>
    
</div>

<?php include'footer.php';?>