<?php include 'st_con.php'; ?>
<?php


$sqlAgent = '';
if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $sqlAgent = $conn->prepare("SELECT * FROM add_course WHERE c_id LIKE '%$search%'") or die ("Could not search");
    $sqlAgent->execute();
    $dataAgent = $sqlAgent->fetchAll();

    
    if($count == 0){
      $sqlAgent = "There was no search results!";

    }else{

      $sqlAgent->execute();
      $dataAgent = $sqlAgent->fetchAll();

    }
  }else {
    $sqlAgent = $conn->prepare("SELECT * FROM add_course ORDER BY `sl` ASC");
    $sqlAgent->execute();
    $dataAgent = $sqlAgent->fetchAll();
  }

  if (isset($_POST['enrolled_course'])) {
    $st_id = $_POST['st_id'];
    $c_id = $_POST['c_id'];
    $faculty = $_POST['faculty'];
    $section = $_POST['section'];
    $c_hour = $_POST['c_hour'];
    $credit_amount = $_POST['credit_amount'];

    $query = $conn->prepare("SELECT * FROM enrolled_course WHERE `st_id` = '$st_id' AND `c_id` = '$c_id'");
    $query->execute();
    if ($query->fetchColumn() > 0) {
     $sms = '<div style="color: red; text-align: center;" class="alert alert-danger"><strong>Course has been taken already!</strong> </div>';
    } else {
      $data = array($st_id,$c_id,$faculty,$section, $c_hour, $credit_amount);
                  $sql = "insert into enrolled_course (st_id,c_id,faculty,section,c_hour,credit_amount)values(?,?,?,?,?,?)";
                  $stmt = $conn->prepare($sql);
                  $end = $stmt->execute($data);
                  if ($end) {
                     $sms = '<div style="color: green; text-align: center;" class="alert alert-success"><strong>Course has been taken successfully!</strong> </div>';
                  } else {
                      $sms = '<div style="color: red; text-align: center;" class="alert alert-danger"><strong>Data submission unsuccessful</strong> Indicates a unsuccessful or negative action.</div>';
                  }
    }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Student Panel - Dashboard</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
    <style type="text/css">
    th {
    text-align: left;
    padding-bottom: 15px;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align: center;
    }

    body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
  </head>
  <body>
    <div class="white-wood">
      <header class="medium-fade shadow">
        <div class="wrapper">
          <div id="logo">
            <h2>IUBAT</h2>
            <h2>University</h2>
          </div>
        </div>
        <div id="navbar" class="light-fade">
          <div class="wrapper">
            <nav>
            <a class="selected" href="index.php">Enroll Courses</a> <a href="drop.php">Drop Courses</a><a  href="real.php">Enrolled Courses</a><a href="contact.php">Contact</a><a href="../logout.php?type=student">Logout</a>
          </nav>
          </div>
        </div>
      </header>



      <div class="wrapper clearfix">
        <section id="featured-property" class="col-3 first shadow">
          <div class="col-sm-9" style="background-color:white">
 
          <form action ="index.php" method = "post">
  
        <input name="search" type="text" size="30" placeholder="Search"/>

        <input type="submit" value="Search"/>

        </form> 

 <!-- <input type="text" placeholder="Search"> -->

  <div class='container' style='width:100%;'>
  <?php 
    if (isset($sms)) {
      echo $sms;
    }
  ?>
  <?php 
    if (isset($asche)) {
      echo $asche;
    }
  ?>
    <br>
    <br>

    <table id='theTable' style='width:100%;'>
      <thead>
        
        <th><h3>Serial No.</h3></th>
        <th><h3>Course Id</h3></th>
        <th><h3>Course Name</h3></th>
        <th><h3>Credit Hour</h3></th>
        <th><h3>Amount</h3></th>
        <th><h3>Faculty</h3></th>
        <th><h3>Section</h3></th>
        <th><h3>Day</h3></th>
        <th><h3>Time</h3></th>
      
      </thead>
      <tbody>
                  <?php
                  $i=1;
                  foreach($dataAgent as $value)
                  {
                  ?>
                   <tr>
                     
                       <td><h5><?php echo  $value['sl']; ?></h5></td>
                       <td><h5><?php echo  $value['c_id']; ?></h5></td>
                       <td><h5><?php echo  $value['c_name']; ?></h5></td>
                       <td><h5><?php echo  $value['c_hour']; ?></h5></td>
                       <td><h5><?php echo  $value['credit_amount']; ?></h5></td>
                       <td>
                       <button id="myBtn"><?php echo  $value['faculty']; ?></button>
                        </td>
                        <td><h5><?php echo  $value['section']; ?></h5></td>
                        <form action="index.php" method="post">
                          <input type="hidden" name="st_id" value="<?php echo  $_SESSION['st_id']; ?>">
                          <input type="hidden" name="c_id" value="<?php echo  $value['c_id']; ?>">
                          <input type="hidden" name="faculty" value="<?php echo  $value['faculty']; ?>">
                          <input type="hidden" name="section" value="<?php echo  $value['section']; ?>">
                          <input type="hidden" name="c_hour" value="<?php echo  $value['c_hour']; ?>">
                          <input type="hidden" name="credit_amount" value="<?php echo  $value['credit_amount']; ?>">
                              <td><input name="enrolled_course" onclick="return confirm('Are you sure to take this course?')" type="submit" value="<?php echo  $value['day1'];?>"></td>
                            <td><h5><?php echo  $value['time1']; ?></h5></td>
                        </form>                 
                  </tr>
                  <!-- The Modal -->
                  <div id="myModal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Full Name: <?php echo  $value['faculty_full']; ?></p>
                  </div>

                  </div>
                  <?php
                  $i++;
                  }
                  ?>

      </tbody>
    </table>
    <br>
    <br>
    
  </div>  
   <br><br>
    </div>
        </section>
      </div><!-- .wrapper -->
    </div><!-- .white-wood -->

 

    <footer>
      &copy; 2020 Iubat Properties.
    </footer>

</body>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>


