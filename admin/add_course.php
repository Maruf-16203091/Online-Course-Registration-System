<?php

if (isset($_POST['btn'])) {
    $id = $_POST['c_id'];
    $name = $_POST['c_name'];
    $dep = $_POST['department'];   
    $batch = $_POST['batch'];
    $credit = $_POST['c_hour'];
    $credit_amount = $_POST['credit_amount'];
    $faculty = $_POST['faculty'];
    $faculty_full = $_POST['faculty_full'];
    $section = $_POST['section'];
    $day1 = $_POST['day1'];
    $day2 = $_POST['day2'];
    $day3 = $_POST['day3'];
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $time3 = $_POST['time3'];

    if (!empty($id) && !empty($name) && !empty($dep) && !empty($batch) && !empty($credit_amount) && !empty($credit) && !empty($faculty) && !empty($faculty_full) && !empty($section) && !empty($day1) && !empty($day2) && !empty($day3) && !empty($time1) && !empty($time2) && !empty($time3) ) {
                $data = array($id,$name,$dep,$batch,$credit,$credit_amount,$faculty,$faculty_full,$section,$day1,$day2,$day3,$time1,$time2,$time3);
                $sql = "insert into add_course (c_id,c_name,department,batch,c_hour,credit_amount,faculty,faculty_full,section,day1,day2,day3,time1,time2,time3)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
                                            <input type="text" class="form-control" name="c_id" placeholder="Enter Course Id" required/>                                             
                                        </div> 

                                         <div class="form-group">
                                            <label>Course Name:</label>
                                            <input type="text" class="form-control" name="c_name" placeholder="Enter Course Name" required/>                                             
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
                                            <input type="text" class="form-control" name="batch" placeholder="Enter Batch Id" required/>                                             
                                        </div> 

										<div class="form-group">
                                            <label>Credit Houre:</label>
                                            <input type="text" class="form-control" name="c_hour" placeholder="Enter Credit Hour" required/>                                             
                                        </div>	

										<div class="form-group">
                                            <label>Credit Amount:</label>
                                            <input type="text" class="form-control" name="credit_amount" placeholder="Enter Credit Amount" required/>                                             
                                        </div>	
										
										<div class="form-group">
                                            <label>Faculty Name(Short form):</label>
                                            <input type="text" class="form-control" name="faculty" placeholder="Faculty Name" required/>                                             
                                        </div>

                                        <div class="form-group">
                                            <label>Faculty Full Name:</label>
                                            <input type="text" class="form-control" name="faculty_full" placeholder="Faculty Full Name" required/>                                             
                                        </div>  	

                                        <div class="form-group">
                                            <label>Section:</label>
                                            <input type="text" class="form-control" name="section" placeholder="Section" required/>                                             
                                        </div>	
										
									<div style="margin-bottom: 25px">
                                        <label>Day 1:</label>
                                    <select name="day1" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Day------</option>
                                     <option value="sunday">Sunday</option>
                                     <option value="sunday">Monday</option>
                                     <option value="sunday">Tuesday</option>
                                     <option value="sunday">Wednesday</option>
                                     <option value="sunday">Thursday</option>
                                    </select>
             
                                     </div>
                                        <div style="margin-bottom: 25px">
                                             <label>Time 1:</label>
                                    <select name="time1" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Time------</option>
                                     <option value="8.30 AM- 9.30 AM">  8.30 AM- 9.30 AM</option>
                                     <option value="9.35 AM- 10.35 AM"> 9.35 AM- 10.35 AM </option>
                                     <option value="10.40 AM- 11.40 AM">10.40 AM- 11.40 AM</option>
                                     <option value="11.45 AM- 12.45 PM">11.45 AM- 12.45 PM</option>
                                     <option value="12.45 PM- 12.45 PM">12.45 PM- 12.45 PM</option>
                                     <option value="1.10 PM- 2.10 PM">  1.10 PM- 2.10 PM</option>
                                     <option value="2.15 PM- 3.15 PM">  2.15 PM- 3.15 PM</option>
                                     <option value="3.20 PM- 4.20 PM">  3.20 PM- 4.20 PM</option>
                                     <option value="4.25 PM- 5.25 PM">  4.25 PM- 5.25 PM</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                            <label>Day 2:</label>
                                    <select name="day2" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Day------</option>
                                     <option value="sunday">Sunday</option>
                                     <option value="sunday">Monday</option>
                                     <option value="sunday">Tuesday</option>
                                     <option value="sunday">Wednesday</option>
                                     <option value="sunday">Thursday</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                             <label>Time 2:</label>
                                    <select name="time2" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Time------</option>
                                     <option value="8.30 AM- 9.30 AM">8.30 AM- 9.30 AM</option>
                                     <option value="9.35 AM- 10.35 AM">9.35 AM- 10.35 AM </option>
                                     <option value="10.40 AM- 11.40 AM">10.40 AM- 11.40 AM</option>
                                     <option value="11.45 AM- 12.45 PM">11.45 AM- 12.45 PM</option>
                                     <option value="12.45 PM- 12.45 PM">12.45 PM- 12.45 PM</option>
                                     <option value="1.10 PM- 2.10 PM">1.10 PM- 2.10 PM</option>
                                     <option value="2.15 PM- 3.15 PM">2.15 PM- 3.15 PM</option>
                                     <option value="3.20 PM- 4.20 PM">3.20 PM- 4.20 PM</option>
                                     <option value="4.25 PM- 5.25 PM">4.25 PM- 5.25 PM</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                            <label>Day 3:</label>
                                    <select name="day3" class="selectpicker form-password form-control">
                                     <option>--------Day------</option>
                                     <option value="sunday">Sunday</option>
                                     <option value="sunday">Monday</option>
                                     <option value="sunday">Tuesday</option>
                                     <option value="sunday">Wednesday</option>
                                     <option value="sunday">Thursday</option>
                                    </select>
             
                                     </div>

                                        <div style="margin-bottom: 25px">
                                            <label>Time 3:</label>
                                    <select name="time3" class="selectpicker form-password form-control">
                                                            
                                     <option>--------Time------</option>
                                     <option value="8.30 AM- 9.30 AM">8.30 AM- 9.30 AM</option>
                                     <option value="9.35 AM- 10.35 AM">9.35 AM- 10.35 AM </option>
                                     <option value="10.40 AM- 11.40 AM">10.40 AM- 11.40 AM</option>
                                     <option value="11.45 AM- 12.45 PM">11.45 AM- 12.45 PM</option>
                                     <option value="12.45 PM- 12.45 PM">12.45 PM- 12.45 PM</option>
                                     <option value="1.10 PM- 2.10 PM">1.10 PM- 2.10 PM</option>
                                     <option value="2.15 PM- 3.15 PM">2.15 PM- 3.15 PM</option>
                                     <option value="3.20 PM- 4.20 PM">3.20 PM- 4.20 PM</option>
                                     <option value="4.25 PM- 5.25 PM">4.25 PM- 5.25 PM</option>
                                    </select>
             
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