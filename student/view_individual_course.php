


<?php 

$id= $_GET['c_id'];

$sqlAgent = $conn->prepare("SELECT * FROM add_course where $id = sl ORDER BY `sl` DESC");
  $sqlAgent->execute();
  $dataAgent = $sqlAgent->fetch(PDO::FETCH_ASSOC);
      
  
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
 
 

  <div class='container' style='width:100%;'>
    <br>
    <br>

    <table id='theTable' style='width:100%;'>
      <thead>
        
        
        <th><h3>Course Id</h3></th>
        <th><h3>Course Name</h3></th>
        <th><h3>Faculty</h3></th>
        <th><h3>Section</h3></th>
        <th><h3>Day1</h3></th>
        <th><h3>Day2</h3></th>
        <th><h3>Day3</h3></th>
        <th><h3>Time1</h3></th>
        <th><h3>Time2</h3></th>
        <th><h3>Time3</h3></th>
      
      </thead>
      <tbody>
                  <?php
                  $i=1;
                  foreach($dataAgent as $value)
                  {
                  ?>
                   <tr>
                                            
                   
                   <td><h5><?php echo  $value['c_id']; ?></h5></td>
                   <td><h5><?php echo  $value['c_name']; ?></h5></td>
                   <td><h5><?php echo  $value['faculty']; ?></h5></td>
                   <td><h5><?php echo  $value['section']; ?></h5></td>
                   <td><h5><?php echo  $value['day1']; ?></h5></td>
                   <td><h5><?php echo  $value['day2']; ?></h5></td>
                   <td><h5><?php echo  $value['day3']; ?></h5></td>
                   <td><h5><?php echo  $value['time1']; ?></h5></td>
                   <td><h5><?php echo  $value['time2']; ?></h5></td>
                   <td><h5><?php echo  $value['time3']; ?></h5></td>
                                            
                  </tr>
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
</html>


