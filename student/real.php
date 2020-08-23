<?php include 'st_con.php'; ?>
<?php
  $st_id = $_SESSION['st_id'];
  $sql1 = $conn->prepare("SELECT * FROM enrolled_course WHERE `st_id` = '$st_id'");
  $sql1->execute();
  $data = $sql1->fetchAll();
?>

<?php

  $sql = $conn->prepare("SELECT * FROM enrolled_course WHERE `st_id` = '$st_id'"  );
  $sql->execute();
  $data = $sql->fetchAll();

  $totalHour =$conn->prepare("SELECT SUM(c_hour) AS totCreditHour FROM enrolled_course WHERE `st_id` = '$st_id'"  );
  $totalHour->execute();
  $result = $totalHour->fetch(\PDO::FETCH_ASSOC);

  $totalAmount =$conn->prepare("SELECT SUM(credit_amount) AS totCreditAmount FROM enrolled_course WHERE `st_id` = '$st_id'"  );
  $totalAmount->execute();
  $result1 = $totalAmount->fetch(\PDO::FETCH_ASSOC);
  
     
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

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Panel - Dashboard - New Properties</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>

  <style type="text/css">
    th {
    text-align: left;
    padding-bottom: 15px;
}
</style>
</head>
<body>
  

  <div class="white-wood">
    <header class="medium-fade shadow">
      <div class="wrapper">
        <div id="logo">
          
            <h2>IUBAT University</h2>
        </div>
      </div><!-- .wrapper -->
      <div id="navbar" class="light-fade">
        <div class="wrapper">
         <nav>
            <a  href="index.php">Enroll Courses</a><a href="drop.php">Drop Courses</a><a class="selected" href="real.php">Enrolled Courses</a><a href="contact.php">Contact</a><a href="../logout.php?type=student">Logout</a>
          </nav>
        </div><!-- .wrapper -->
      </div><!-- #navbar -->
    </header>
  
    <div class="wrapper clearfix">
        <section id="featured-property" class="col-3 first shadow">
          <div class="col-sm-9" style="background-color:white">
 
 

  <div class='container' style='width:100%;'>
    <h3 style="text-align: center; color: green;">Course taken by <?php echo $_SESSION['st_id']?></h3>
    <br>
    <br>

    <table id='theTable' style='width:100%;'>
      <thead>
        
        
        <th><h3>Course Id</h3></th>
        <th><h3>Course Name</h3></th>
        <th><h3>Faculty</h3></th>
        <th><h3>Credit Hour</h3></th>
        <th><h3>Amount</h3></th>
        </thead>
      <tbody>
                  <?php
                  $i=1;
                  foreach($data as $value)
                  {
                  ?>

                  <form method="post">
                   <tr>
                                            
                   
                   <td><h5><?php echo  $value['c_id']; ?></h5></td>
                   <td><h5><?php echo  $value['c_id']; ?></h5></td>
                   <td><h5><?php echo  $value['faculty']; ?></h5></td>
                   <td><h5><?php echo  $value['c_hour']; ?></h5></td>
                   <td><h5><?php echo  $value['credit_amount']; ?></h5></td>
                    </tr>

                    </form>
                  <?php
                  $i++;
                  }
                  ?>

                   <td></td>
                   <td></td>
                   <td></td>
                   <td>Total: Hour: <?php echo $result['totCreditHour']; ?></td>
                   <td>Total: Amount: <?php echo $result1['totCreditAmount']; ?></td>

      </tbody>
    </table>
    <br>
    <br>
    
  </div>  
   <br><br>
    </div>
        </section>
      </div><!-- .wrapper -->
    </div>

  <section id="details" class="medium-fade">
      <div class="wrapper clearfix">
        <div class="col-1 first border-right">
          <h3>Contact</h3>
          <p>
            email: <a href="info@iubat.edu">info@iubat.edu</a><br>
            phone: (88 02) 55091801-5
            mobile: +88 01714014933, 01756174477, 01939056290, 01700513586
          </p>
          <h3>Correspondence</h3>
          <address>

            4 Embankment Drive Road,Sector-10, Uttara Model Town, Dhaka-1230.
           
          </address>
        </div>

        <div class="col-1 border-right">
          <h3>Links</h3>
          <p>
            <a href="#" target="_blank">Contact</a><br>
            <a href="#" target="_blank">Enroll Courses</a><br>
            <a href="#" target="_blank">Drop Courses</a>
          </p>
        </div>

        <div class="col-1">
          <h3>Follow</h3>
          <p>
            <a href="#" target="_blank">Youtube</a><br>
            <a href="#" target="_blank">Facebook</a><br>
            <a href="#" target="_blank">Twitter</a>
          </p>
        </div>
      </div><!-- .wrapper -->
    </section>

    <footer>
      &copy; 2020 Iubat Properties.
    </footer>
  
</body>
</html>