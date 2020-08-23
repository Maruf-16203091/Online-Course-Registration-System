<?php

require("../db_connect/connection.php");

session_start();
if($_SESSION['admin_email']!=null)
{
	
	     $id = $_SESSION['admin_id'];
		 $sql= $conn->prepare("select * from admin where admin_id='$id'");
		 $sql->execute();
		 $data = $sql->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
	
	
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> <i class="fa fa-user"></i>  <?php echo $_SESSION['admin_name'];?>
   </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">		
            <li>
                <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
                      
            <li>
                <a href="index.php?page=add_course"><i class="fa fa-sign-out fa-3x"></i> Add User Courses</a>
            </li> 
            <li>
                <a href="index.php?page=remove_course"><i class="fa fa-sign-out fa-3x"></i> Manage Course</a>
            </li> 
              <li>
                <a href="index.php?page=course"><i class="fa fa-edit fa-3x"></i> Add Pre-requsite Courses </a>
            </li>  

            <li>
                <a href="index.php?page=manage_course"><i class="fa fa-edit fa-3x"></i> Mng Pre-requsite Courses </a>
            </li>

            <li>
                <a href="index.php?page=messages"><i class="fa fa-edit fa-3x"></i> Students Messages </a>
            </li>

                
			<!-- <li>
                <a href="index.php?page=edit_course"><i class="fa fa-edit fa-3x"></i> Edit Course</a>
            </li> -->	  
           				
			<li>
                 <a   href="../logout.php?type=admin"><i class="fa fa-sign-out fa-3x"></i> Logout</a>
            </li>

               </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
		
		       <?php 
                  switch (@$_GET['page']) {
                        case "add_course": {
                                include("add_course.php");
                            }
                            break;
                            
                             case "remove_course": {
                                include("remove_course.php");
                            }
                            break;  
                            
                            case "course": {
                                include("course.php");
                                 }
                            break;
                            case "manage_course": {
                                include("manage_course.php");
                                 }
                            break;

                                case "edit_course": {
                                include("edit_course.php");
                            }
                            break;

                            case "messages": {
                                include("messages.php");
                            }
                            break;
                            
                         default: {
                                include("dashboard.php");
                            }
                    }
                
                ?>  	

       </div>
         <!-- /. PAGE WRAPPER  -->
   
</body>
</html>

</html>

<?php  
}
else
{
	 header('location:../error.php');
}
?>





