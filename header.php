<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Result_app</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" type="text/css"  rel="stylesheet"/>
    
    <link href="css/main.css" rel="stylesheet"  type="text/css"/>
    
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--Style your code here-->
    <style>
    body{background:URL(images/education.jpg); background-attachment: fixed;background-position: center;background-size: cover;}
    .body_wrapper{float:left;width: 100%;background: rgba(112,112,112,.9);}
    .header{float: left;width: 100%;}
    .menu{float: left;width: 100%;}
    .user_panel{float: left;width: 100%;}
    .user_panel img{max-width: 55px;}
    .header_inner{text-align: center;float: left;width: 100%;background: cadetblue;margin-bottom: 7px;}
    .dashbodr_panel{float: left;width: 100%;}
    .dashbodr_panel h1{text-align: center;font-size: 44px;font-weight: bold;color: black;}
    .dashbodr_panel img{ max-width: 350px;float: left;width: 100%;} 
    .footer{margin-top:35px; background:cadetblue;padding: 10px;}
    </style>
    

            <div class="body_wrapper">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="header_inner">
                        <div class="col-sm-10 col-md-10 col-lg-10">

                                <div class="menu">
                                    <a href="<?php echo"dashbord.php";?>" class="btn btn-primary" role="button"><i class="fa fa-tachometer" aria-hidden="true"></i>Home</a>

                                    <a href="<?php echo"student_list.php";?>" class="btn btn-primary" role="button"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
									
                                    <a href="<?php echo"teacher_list.php";?>" class="btn btn-primary" role="button"><i class="fa fa-user" aria-hidden="true"></i>Faculty</a>

                                    <a href="<?php echo"course_list.php";?>" class="btn btn-primary" role="button"><i class="fa fa-book" aria-hidden="true"></i>Course</a>
									
									<a href="<?php echo"department_list.php";?>" class="btn btn-primary" role="button"><i class="fa fa-book" aria-hidden="true"></i>Department</a>

                                </div>

                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2">

                                <div class="user_panel">
                                    <a href="#" class="" role="button">
                                         <img src="images/user_admin.png" class="img-circle" alt="Cinque Terre"> 
                                    </a>
                                    <a href="<?php echo"logout.php";?>" class="fa fa-power-off" role="button" style="font-size:22px;color:red;text-decoration: none;"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>