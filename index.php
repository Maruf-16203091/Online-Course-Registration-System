<?php
require("db_connect/connection.php");
session_start();
if(isset($_POST['btn']))
{
	$login_type = $_POST['login_type'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
       if($login_type == 'student')
	{
		 $sql = $conn->prepare("select * from student where st_id='$username'");
		 $sql->execute();
		 $value = $sql->fetch(PDO::FETCH_ASSOC);
		 //echo "<pre>";print_r($value);exit;
		if($value['password']==$password)
		{
			$_SESSION['st_id'] 		   = $value['st_id'];
			$_SESSION['st_name']       = $value['st_name'];
			$_SESSION['st_email']      = $value['st_email'];
			$_SESSION['st_phone']      = $value['st_phone'];
            
                        
            header('location:student');
		}
		else
		{
			$sms = '<div class="alert alert-danger alert-dismissable error-message"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry! You have entered a wrong password.</strong> </div>';
		}
		
	} 
	
	else if($login_type == 'admin')
	
	{
		 $sql = $conn->prepare("select * from admin where admin_email='$username'");
		 $sql->execute();
		 $value = $sql->fetch(PDO::FETCH_ASSOC);
		 //echo "<pre>";print_r($value);exit;
		if($value['password']==$password)
		{
			$_SESSION['admin_id']       = $value['admin_id'];
			$_SESSION['admin_name']     = $value['admin_name'];
			$_SESSION['admin_email']    = $value['admin_email'];
            $_SESSION['admin_phone']  	= $value['admin_phone'];
                        
            header('location:admin');
		}
		
		else
		{
			$sms = '<div class="alert alert-danger alert-dismissable error-message"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry! You have entered a wrong password.</strong> </div>';
		}
	}	 	
	
	else
	 {
			$sms = '<div class="alert alert-danger alert-dismissable error-message"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Please! Select a Login Type</strong> </div>';
	 }
	 
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Course Registration</title>      
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<style>
body {
    background-image: url("assets/image/b.jpg");
}
</style>
</head>

    <body>

        <!-- Top content -->
       
        	<div class="col-md-4 bann-info1" >
             <div class="col-sm-12 col-sm-offset-1 text">
             	<h1 style="color: white">Online Course Registration</h1>
             </div>						
              </div>
               <div class="container">
               	<div class="col-sm-6 col-sm-offset-3 "><h3 style="color:blue; text-align: center;" ><?php if(isset($sms)) {echo $sms;} ?> </h3>	</div>
                    <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                     <div class="form-top">
                        		
                        		<div class="form-top-right">
								<b><h1 style="color: white">Login Panel</h1></b>
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">User Id</label>
			                        	<input type="text" name="username" placeholder="User Id..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password"  placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
									
								<div style="margin-bottom: 25px">
								<select name="login_type" class="selectpicker form-password form-control">
                                   							
                                     <option>--------Select Login Type------</option>
                                     <option value="student">Student</option>
                                     <option value="admin">Admin</option>
                                    </select>
                                     </div>
			                        <button style="color: black" type="submit" name="btn" class="btn">Log In</button>
									<br><br>
									<a href = 'register.php'>Sign Up</a>
			                    </form>
		                    </div>
                        </div>
                    </div>
                 
                    </div>
                </div>
            </div>
            
        </div>

    </body>

</html>
