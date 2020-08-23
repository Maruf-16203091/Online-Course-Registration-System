<?php

require("../db_connect/connection.php");

session_start();
if($_SESSION['st_id']!=null)
{
	
	     $id = $_SESSION['st_id'];
		 $sql= $conn->prepare("select * from student where st_id='$id'");
		 $sql->execute();
		 $data = $sql->fetch(PDO::FETCH_ASSOC);
	


?>
<?php  
}
else
{
	 header('location:../error.php');
}
?>
