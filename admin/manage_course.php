<?php

	$sql = $conn->prepare("select * from course");
	$sql->execute();
	$data = $sql->fetchAll();
		 
		 
		 if(isset($_POST['delete']))
		 {
			   $id = $_POST['c_id'];
			   $sql = $conn->prepare("delete from course where c_id='$id'");
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
	
		
<div id="page-inner">
     <div class="row">
         <div class="col-md-12">
          <h2>Manage All Courses</h2>		  
                      
         </div>
     </div>
	  
      
      <hr />
	 <?php if(isset($sms)){echo $sms;} ?>
			 <div class="row">
                <div class="col-md-12">
                  
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
                                            <th>Credit Houre</th>
                                            <th>Prerequsite-Course 1</th>
                                            <th>Prerequsite-Course 2</th>
                                            <th>Prerequsite-Course 3</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$i=1;
									foreach($data as $value)
									{
									?>
									
									<form method="post">
                                        <tr>
                                            <td> <h4> <?php echo  $i; ?> </h4></td>
                                            <td><h4><?php echo  $value['c_id']; ?></h4></td>
                                            <td><h4><?php echo  $value['c_name']; ?></h4></td>
                                            <td><h4><?php echo  $value['c_hour']; ?></h4></td>
                                            <td><h4><?php echo  $value['pre_course1']; ?></h4></td>
                                            <td><h4><?php echo  $value['pre_course2']; ?></h4></td>
                                            <td><h4><?php echo  $value['pre_course3']; ?></h4></td>
                                            <td class="center">
											<form method="post" style="width: 30px; float: left">
												<button class="btn btn-xs btn-danger" type="submit" name="delete" onclick="return confirmation()">
													<span class="glyphicon glyphicon-trash"></span>
													<input type="hidden" name="c_id" value="<?php echo $value['c_id']; ?>">
												</button>
                                            </form>
                                            
												
														
											</td>

                                        </tr>
										
									</form>
									
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
