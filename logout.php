
<?php
session_start();
switch($_GET['type'])
{
case 'student':
	unset($_SESSION['st_id']);
	unset($_SESSION['st_name']  );
	unset($_SESSION['st_email']  );
	unset($_SESSION['st_phone']);
	header('location:index.php');
	break;

case 'admin':
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_name']  );
	unset($_SESSION['admin_email']  );
	unset($_SESSION['admin_phone']);
	header('location:index.php');
	break;
}


  
 
 