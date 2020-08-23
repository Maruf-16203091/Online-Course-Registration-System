<?php

	$sql = $conn->prepare("select * from problem");
	$sql->execute();
	$data = $sql->fetchAll();
		 
		 
		 if(isset($_POST['delete']))
		 {
			   $id = $_POST['id'];
			   $sql = $conn->prepare("delete from problem where id='$id'");
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
          <h2>Students Messages</h2>		  
                      
         </div>
     </div>
	  
      <!-- /. ROW  -->
      <hr />
	 <?php if(isset($sms)){echo $sms;} ?>
			 <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
             <div class="panel-heading" style="text-align:center; font-weight: bolder; font-size: 18px;">All Messages Information  </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Student Name</th>                                          
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
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
                                        <td><h4><?php echo  $i; ?></h4></td>
                                        <td><h4><?php echo  $value['name']; ?></h4></td>
                                        <td><h4><?php echo  $value['email']; ?></h4></td>
                                        <td><h4><?php echo  $value['phone']; ?></h4></td>
                                        <td><h4><?php echo  $value['sms']; ?></h4></td>
                                        <td class="center">
                                            
                                            <form method="post" style="width: 30px; float: left">
												<button class="btn btn-xs btn-danger" type="submit" name="delete" onclick="return confirmation()">
													<span class="glyphicon glyphicon-trash"></span>
													<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
												</button>
                                            </form>
                                            
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
