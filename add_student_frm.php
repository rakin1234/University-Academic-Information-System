<?php 
include('session.php');
include'header.php';?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        
            <center><h2>Student Application Form</h2></center>
    <form action="controlar.php" method="post" enctype="multipart/form-data">
			  
               First Name:<input type=text, name="fm">
			   Middle Name <input type=text, name="mn">
			   Last Name <input type=text, name="ln"><br><br>
			   Father's Name<input type=text, name="fam"><br><br>
                Mother's Name<input type=text, name="ma"><br><br>
               Present Address<br><br>
			   House No:<input type="number" name="hno">
			   Location <input type=text, name="loc">
			   Village/Street <input type=text, name="vill"><br><br>
			   Thana <input type=text, name="Thana">
			   District<input type=text, name="dist">
			   Post code<input type="number" name="postc"> <br><br>
        
			   Temporary Address<br><br>
			   House No:<input type="number" name="hno_t">
			   Location <input type=text, name="loc_t">
			   Village/Street <input type=text, name="vill_t"><br><br>
			   Thana <input type=text, name="Thana_t">
			   District<input type=text, name="dist_t">
			   Post code<input type="number" name="postc_t"> <br><br>
			   Date of Birth:<input type="date" name="dob">(DD-MM-YYYY) <br><br>
        <table border = 1>
          <tr>
            <th>Name of degree</th>
            <th>Institute</th> 
            <th>Board</th>
            <th>Year</th> 
            <th>Result</th> 
          </tr>
          <tr>
            <td>JSC/JDC
            </td>
            <td>
            <input type=text, name="j_inst">
            </td>
            <td>
            <input type=text, name="j_bord">
            </td>
            <td>
            <input type=text, name="j_yr">
            </td>
            <td>
            <input type=text, name="j_reslt">
            </td>
          </tr>
           <tr>
            <td>SSC</td>
            <td>
            <input type=text, name="s_inst">
            </td>
            <td>
            <input type=text, name="s_bord">
            </td>
            <td>
            <input type=text, name="s_yr">
            </td>
            <td>
            <input type=text, name="s_reslt">
            </td>
          </tr>
           <tr>
            <td>HSC</td>
            <td>
            <input type=text, name="h_inst">
            </td>
            <td>
            <input type=text, name="h_bord">
            </td>
            <td>
            <input type=text, name="h_yr">
            </td>
            <td>
            <input type=text, name="h_reslt">
            </td>
          </tr> 



        </table> 
        <br><br>
   <button name="submit" type="submit" class="btn btn-success">Submit</button> <button name="reset" type="reset" class="btn btn-warning">Reset</button>
</form>
        
        </div>
    </div>
    
</div>

<?php include'footer.php';?>