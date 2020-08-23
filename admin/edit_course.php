<?php

if (isset($_POST['btn'])) {
    $id = $_POST['c_id'];
    $name = $_POST['c_name'];
    $credit = $_POST['c_hour'];
    $faculty = $_POST['faculty'];
    $day = $_POST['day'];
    $time = $_POST['time'];
	
    

   if (!empty($id) && !empty($name)  && !empty($faculty) && !empty($day) && !empty($time) && !empty($credit)) {
				$sql = "update add_course set c_id='$id',c_name='$name',faculty='$faculty',day='$day',time='$time',c_hour='$credit' where c_id='$id'";
				$stmt = $conn->prepare($sql);
				$end = $stmt->execute();
				if ($end) {
				   $sms = '<div class="alert alert-success alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Data has been successfully updated!</strong> </div>';
				   
				} else {
					$sms = '<div class="alert alert-danger alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Data Update unsuccessful</strong> Indicates a unsuccessful or negative action.</div>';
				}
    } else {
		$sms = '<div class="alert alert-warning alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Unsuccess!</strong> Sorry you must fillup all the field .....</div>';
    }
}

    if (isset($_GET['sl'])) {
        $course_sl = $_GET['sl'];
        $query = $conn->prepare("SELECT * FROM add_course WHERE `sl`='$course_sl'"); 
        $query->execute(); 
        $row = $query->fetch();
    }

    if (isset($_POST['update'])) {
        $c_id = $_POST['c_id'];
        $c_name = $_POST['c_name'];
        $department = $_POST['department'];   
        $batch = $_POST['batch'];
        $credit = $_POST['c_hour'];
        $credit_amount = $_POST['credit_amount'];
        $faculty = $_POST['faculty'];
        $section = $_POST['section'];
        $day1 = $_POST['day1'];
        $day2 = $_POST['day2'];
        $day3 = $_POST['day3'];
        $time1 = $_POST['time1'];
        $time2 = $_POST['time2'];
        $time3 = $_POST['time3'];
        if (!empty($c_id) && !empty($c_name) && !empty($department) && !empty($batch) && !empty($credit_amount) && !empty($credit) && !empty($faculty) && !empty($section) && !empty($day1) && !empty($day2) && !empty($day3) && !empty($time1) && !empty($time2) && !empty($time3)) {

            $sql = "UPDATE add_course SET c_id='$c_id',c_name='$c_name', department = '$department',batch = '$batch', credit_amount = '$credit_amount', section = '$section', day1 = '$day1' , day2 = '$day2' , day3 = '$day3' , time1 = '$time1' , time2 = '$time2', time3 = '$time3',faculty='$faculty',c_hour='$credit' where sl='$course_sl'";
            $stmt = $conn->prepare($sql);
            $end = $stmt->execute();
            if ($end) {
               $sms = '<div class="alert alert-success alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Data has been successfully updated!</strong> </div>';
               
            } else {
                $sms = '<div class="alert alert-danger alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Data Update unsuccessful</strong> Indicates a unsuccessful or negative action.</div>';
            }
        } else {
            $sms = '<div class="alert alert-warning alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Unsuccess!</strong> Sorry you must fillup all the field .....</div>';
        }
        $course_sl = $_GET['sl'];
        $query = $conn->prepare("SELECT * FROM add_course WHERE `sl`='$course_sl'"); 
        $query->execute(); 
        $row = $query->fetch();
    }

?>	
	

<!---  Contents Starts ------>

   <div id="page-inner">
       <div class="row">
           <div class="col-md-12">
            <h2>Update Course Information</h2>   
               
              
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
                             Course Form 
                        </div>						
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                     
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Course Code:</label>
                                            <input type="text" class="form-control" name="c_id" placeholder="Enter Course Id" required value="<?php echo $row['c_id']; ?>"/>                                             
                                        </div> 

                                         <div class="form-group">
                                            <label>Course Name:</label>
                                            <input type="text" class="form-control" name="c_name" placeholder="Enter Course Name" required value="<?php echo $row['c_name']; ?>"/>                                             
                                        </div> 

                                        <div style="margin-bottom: 25px">
                                            <label>Department:</label>

                                    <select name="department" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Department------</option>
                                     <option value="bcse">BCSE</option>
                                     <option value="bba">BBA</option>
                                     <option value="bseee">BSEEE</option>
                                     <option value="bsce">BSCE</option>
                                     <option value="bsag">BSAg</option>
                                     <option value="bsme">BSME</option>
                                     <option value="bathm">BATHM</option>
                                     <option value="bsn">BSN</option>
                                     <option value="baecon">BAEcon</option>
                                    </select>
             
                                     </div>

                                         <div class="form-group">
                                            <label>Batch:</label>
                                            <input type="text" class="form-control" name="batch" placeholder="Enter Batch Id" required value="<?php echo $row['batch']; ?>"/>                                             
                                        </div> 

										<div class="form-group">
                                            <label>Credit Houre:</label>
                                            <input type="text" class="form-control" name="c_hour" placeholder="Enter Credit Hour" required value="<?php echo $row['c_hour']; ?>"/>                                             
                                        </div>	

										<div class="form-group">
                                            <label>Credit Amount:</label>
                                            <input type="text" class="form-control" name="credit_amount" placeholder="Enter Credit Amount" required value="<?php echo $row['credit_amount']; ?>"/>                                             
                                        </div>	
										
										<div class="form-group">
                                            <label>Faculty Name:</label>
                                            <input type="text" class="form-control" name="faculty" placeholder="Faculty Name" required value="<?php echo $row['faculty']; ?>"/>                                             
                                        </div>	

                                        <div class="form-group">
                                            <label>Section:</label>
                                            <input type="text" class="form-control" name="section" placeholder="Section" required value="<?php echo $row['section']; ?>"/>                                             
                                        </div>	
										
									<div style="margin-bottom: 25px">
                                        <label>Day 1:</label>
                                    <select name="day1" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Day------</option>
                                     <option value="Sunday" <?php if($row['day1'] =='Sunday'){ echo "selected"; } ?>>Sunday</option>
                                     <option value="Monday" <?php if($row['day1'] =='Monday'){ echo "selected"; } ?>>Monday</option>
                                     <option value="Tuesday" <?php if($row['day1'] =='Tuesday'){ echo "selected"; } ?>>Tuesday</option>
                                     <option value="Wednesday" <?php if($row['day1'] =='Wednesday'){ echo "selected"; } ?>>Wednesday</option>
                                     <option value="Thursday" <?php if($row['day1'] =='sunday'){ echo "selected"; } ?>>Thursday</option>
                                    </select>
             
                                     </div>
                                        <div style="margin-bottom: 25px">
                                             <label>Time 1:</label>
                                    <select name="time1" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Time------</option>
                                     <option value="8.30 AM- 9.30 AM" <?php if($row['time1'] =='8.30 AM- 9.30 AM'){ echo "selected"; } ?>>8.30 AM- 9.30 AM</option>
                                     <option value="9.35 AM- 10.35 AM" <?php if($row['time1'] =='9.35 AM- 10.35 AM'){ echo "selected"; } ?>>9.35 AM- 10.35 AM </option>
                                     <option value="10.40 AM- 11.40 AM" <?php if($row['time1'] =='10.40 AM- 11.40 AM'){ echo "selected"; } ?>>10.40 AM- 11.40 AM</option>
                                     <option value="11.45 AM- 12.45 PM" <?php if($row['time1'] =='11.45 AM- 12.45 PM'){ echo "selected"; } ?>>11.45 AM- 12.45 PM</option>
                                     <option value="12.45 PM- 12.45 PM" <?php if($row['time1'] =='12.45 PM- 12.45 PM'){ echo "selected"; } ?>>12.45 PM- 12.45 PM</option>
                                     <option value="1.10 PM- 2.10 PM" <?php if($row['time1'] =='1.10 PM- 2.10 PM'){ echo "selected"; } ?>>1.10 PM- 2.10 PM</option>
                                     <option value="2.15 PM- 3.15 PM" <?php if($row['time1'] =='2.15 PM- 3.15 PM'){ echo "selected"; } ?>>2.15 PM- 3.15 PM</option>
                                     <option value="3.20 PM- 4.20 PM" <?php if($row['time1'] =='3.20 PM- 4.20 PM'){ echo "selected"; } ?>>3.20 PM- 4.20 PM</option>
                                     <option value="4.25 PM- 5.25 PM" <?php if($row['time1'] =='4.25 PM- 5.25 PM'){ echo "selected"; } ?>>4.25 PM- 5.25 PM</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                            <label>Day 2:</label>
                                    <select name="day2" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Day------</option>
                                     <option value="Sunday" <?php if($row['day2'] =='Sunday'){ echo "selected"; } ?>>Sunday</option>
                                     <option value="Monday" <?php if($row['day2'] =='Monday'){ echo "selected"; } ?>>Monday</option>
                                     <option value="Tuesday" <?php if($row['day2'] =='Tuesday'){ echo "selected"; } ?>>Tuesday</option>
                                     <option value="Wednesday" <?php if($row['day2'] =='Wednesday'){ echo "selected"; } ?>>Wednesday</option>
                                     <option value="Thursday" <?php if($row['day2'] =='sunday'){ echo "selected"; } ?>>Thursday</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                             <label>Time 2:</label>
                                    <select name="time2" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Time------</option>
                                     <option value="8.30 AM- 9.30 AM" <?php if($row['time2'] =='8.30 AM- 9.30 AM'){ echo "selected"; } ?>>8.30 AM- 9.30 AM</option>
                                     <option value="9.35 AM- 10.35 AM" <?php if($row['time2'] =='9.35 AM- 10.35 AM'){ echo "selected"; } ?>>9.35 AM- 10.35 AM </option>
                                     <option value="10.40 AM- 11.40 AM" <?php if($row['time2'] =='10.40 AM- 11.40 AM'){ echo "selected"; } ?>>10.40 AM- 11.40 AM</option>
                                     <option value="11.45 AM- 12.45 PM" <?php if($row['time2'] =='11.45 AM- 12.45 PM'){ echo "selected"; } ?>>11.45 AM- 12.45 PM</option>
                                     <option value="12.45 PM- 12.45 PM" <?php if($row['time2'] =='12.45 PM- 12.45 PM'){ echo "selected"; } ?>>12.45 PM- 12.45 PM</option>
                                     <option value="1.10 PM- 2.10 PM" <?php if($row['time2'] =='1.10 PM- 2.10 PM'){ echo "selected"; } ?>>1.10 PM- 2.10 PM</option>
                                     <option value="2.15 PM- 3.15 PM" <?php if($row['time2'] =='2.15 PM- 3.15 PM'){ echo "selected"; } ?>>2.15 PM- 3.15 PM</option>
                                     <option value="3.20 PM- 4.20 PM" <?php if($row['time2'] =='3.20 PM- 4.20 PM'){ echo "selected"; } ?>>3.20 PM- 4.20 PM</option>
                                     <option value="4.25 PM- 5.25 PM" <?php if($row['time2'] =='4.25 PM- 5.25 PM'){ echo "selected"; } ?>>4.25 PM- 5.25 PM</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                            <label>Day 3:</label>
                                    <select name="day3" class="selectpicker form-password form-control">
                                     <option>--------Day------</option>
                                     <option value="Sunday" <?php if($row['day3'] =='Sunday'){ echo "selected"; } ?>>Sunday</option>
                                     <option value="Monday" <?php if($row['day3'] =='Monday'){ echo "selected"; } ?>>Monday</option>
                                     <option value="Tuesday" <?php if($row['day3'] =='Tuesday'){ echo "selected"; } ?>>Tuesday</option>
                                     <option value="Wednesday" <?php if($row['day3'] =='Wednesday'){ echo "selected"; } ?>>Wednesday</option>
                                     <option value="Thursday" <?php if($row['day3'] =='sunday'){ echo "selected"; } ?>>Thursday</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                            <label>Time 3:</label>
                                    <select name="time3" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Time------</option>
                                     <option value="8.30 AM- 9.30 AM" <?php if($row['time3'] =='8.30 AM- 9.30 AM'){ echo "selected"; } ?>>8.30 AM- 9.30 AM</option>
                                     <option value="9.35 AM- 10.35 AM" <?php if($row['time3'] =='9.35 AM- 10.35 AM'){ echo "selected"; } ?>>9.35 AM- 10.35 AM </option>
                                     <option value="10.40 AM- 11.40 AM" <?php if($row['time3'] =='10.40 AM- 11.40 AM'){ echo "selected"; } ?>>10.40 AM- 11.40 AM</option>
                                     <option value="11.45 AM- 12.45 PM" <?php if($row['time3'] =='11.45 AM- 12.45 PM'){ echo "selected"; } ?>>11.45 AM- 12.45 PM</option>
                                     <option value="12.45 PM- 12.45 PM" <?php if($row['time3'] =='12.45 PM- 12.45 PM'){ echo "selected"; } ?>>12.45 PM- 12.45 PM</option>
                                     <option value="1.10 PM- 2.10 PM" <?php if($row['time3'] =='1.10 PM- 2.10 PM'){ echo "selected"; } ?>>1.10 PM- 2.10 PM</option>
                                     <option value="2.15 PM- 3.15 PM" <?php if($row['time3'] =='2.15 PM- 3.15 PM'){ echo "selected"; } ?>>2.15 PM- 3.15 PM</option>
                                     <option value="3.20 PM- 4.20 PM" <?php if($row['time3'] =='3.20 PM- 4.20 PM'){ echo "selected"; } ?>>3.20 PM- 4.20 PM</option>
                                     <option value="4.25 PM- 5.25 PM" <?php if($row['time3'] =='4.25 PM- 5.25 PM'){ echo "selected"; } ?>>4.25 PM- 5.25 PM</option>
                                    </select>
                                     </div>
										<div><p>Please Submit Your Informaion</p></div>
										
										 <button type="submit" name="update" class="btn btn-primary">Submit</button>
										 
										 </form>
										 
								</div>
						    </div>
                       </div>
				     </div>
				</div>
               
               </div>
             
  </div>

