<?php

if (isset($_POST['btn'])) {
    $id = $_POST['c_id'];
    $name = $_POST['c_name'];
    $credit = $_POST['c_hour'];
    $pre_course1 = $_POST['pre_course1'];   
    $pre_course2 = $_POST['pre_course2'];
    $pre_course3 = $_POST['pre_course3'];

    if (!empty($id) && !empty($name) && !empty($credit) && !empty($pre_course1) && !empty($pre_course2) && !empty($pre_course3)) {
                $data = array($id,$name,$credit,$pre_course1,$pre_course2,$pre_course3);
                $sql = "insert into course (c_id,c_name,c_hour,pre_course1,pre_course2,pre_course3)values(?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $end = $stmt->execute($data);
                if ($end) {
                   $sms = '<div class="alert alert-success alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Data has been successfully saved!</strong> </div>';
                } else {
                    $sms = '<div class="alert alert-danger alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Data submission unsuccessful</strong> Indicates a unsuccessful or negative action.</div>';
                }
    } else {
        $sms = '<div class="alert alert-warning alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Unsuccess!</strong> Sorry you must fillup all the field .....</div>';
    }
}

?>
<div id="page-inner">
       <div class="row">
           <div class="col-md-12">
            <h2>Add Course</h2>   
               
              
           </div>
       </div>
        <!-- /. ROW  -->
        <hr />
         <?php if(isset($sms)){ echo $sms; } ?> 
		 
			 <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="text-align:center; font-weight: bolder; font-size: 18px;">
                            Add Course Form 
                        </div>						
						
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                     
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Course Code:</label>
                                            <input type="text" class="form-control" name="c_id" placeholder="Enter Course Id"/>                                             
                                        </div> 

                                         <div class="form-group">
                                            <label>Course Name:</label>
                                            <input type="text" class="form-control" name="c_name" placeholder="Enter Course Name"/>                                             
                                        </div> 

                                    
                                        

										<div class="form-group">
                                            <label>Credit Houre:</label>
                                            <input type="number" class="form-control" name="c_hour" placeholder="Enter Credit Hour"/>                                             
                                        </div>	

                                        <div class="form-group">
                                            <label>Prerequsite-Course:</label>
                                            <input type="text" class="form-control" name="pre_course1" placeholder="Prerequsite-Course"/>                                             
                                        </div>

                                        <div class="form-group">
                                            <label>Prerequsite-Course:(If Any)</label>
                                            <input type="text" class="form-control" name="pre_course2" placeholder="Prerequsite-Course"/>                                             
                                        </div>

                                        <div class="form-group">
                                            <label>Prerequsite-Course:(If Any)</label>
                                            <input type="text" class="form-control" name="pre_course3" placeholder="Prerequsite-Course"/>                                             
                                        </div>

    
										
										<div><p>Please Submit Your Informaion</p></div>
										
										 <button type="submit" name="btn" class="btn btn-primary">Submit</button>
										 
										 </form>
										 
								</div>
						    </div>
					   </div>
				     </div>
				</div>
               
               </div>
             <!-- /. PAGE INNER  -->
  </div>