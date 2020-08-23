<?php

	$sql = $conn->prepare("select * from add_course");
	$sql->execute();
	$data = $sql->fetchAll();
		 
		 
		 if(isset($_POST['delete']))
		 {
			   $id = $_POST['c_id'];
			   $sql = $conn->prepare("delete from add_course where c_id='$id'");
			   $execute = $sql->execute();
			   if($execute)
			   { 
					 $sms = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong> Accountant information has been successfully deleted!</strong> </div>';
			   }  else {
					  $sms = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Blog delete unsuccessfull ! </div>';
			   }   
		 }
?>	

<script type="text/javascript">
		  function confirmation() {
		  return confirm('Are you sure you want to do this?');
			}
</script>

		
<!--------- content starts ------>		
		
<div id="page-inner">
     <div class="row">
         <div class="col-md-12">
          <h2>Remove User Courses</h2>		  
                      
         </div>
     </div>
	  
      <!-- /. ROW  -->
      <hr />
	 <?php if(isset($sms)){echo $sms;} ?>
			 <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
             <div class="panel-heading" style="text-align:center; font-weight: bolder; font-size: 18px;">All Course Information  </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Course Code</th>                                          
                                            <th>Course Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$i=1;
									foreach($data as $value)
									{
									?>
									
                                    <tr>
                                        <td> <h4> <?php echo  $i; ?> </h4></td>
                                        <td><h4><?php echo  $value['c_id']; ?></h4></td>
                                        <td><h4><?php echo  $value['c_name']; ?></h4></td>
                                        <td class="center">
                                            
                                            <form method="post" style="width: 30px; float: left">
												<button class="btn btn-xs btn-danger" type="submit" name="delete" onclick="return confirmation()">
													<span class="glyphicon glyphicon-trash"></span>
													<input type="hidden" name="c_id" value="<?php echo $value['c_id']; ?>">
												</button>
                                            </form>
                                            <a href="index.php?page=edit_course&sl=<?php echo $value['sl']; ?>"><span style="padding:0 10px;font-size: 20px;" class="glyphicon glyphicon-edit"></span></a>
											<!-- <form action="index.php?page=edit_course&sl" method="get">
                                                <input type="hidden" name="sl" value="<?php echo $value['sl']; ?>">
                                                <input type="submit" value="Edit">	
                                            </form> -->
											</td>
                                        </tr>
										
									<?php
									$i++;
									}
									?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
              </div>
				 
				 
				 
               
    </div>
             
 </div>
