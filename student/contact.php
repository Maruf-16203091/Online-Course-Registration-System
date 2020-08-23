
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Panel - Dashboard- Contact</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
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
            <a href="index.php">Enroll Courses</a> <a href="drop.php">Drop Courses</a><a  href="real.php">Enrolled Courses</a><a class="selected" href="contact.php">Contact</a><a href="../logout.php?type=student">Logout</a>
          </nav>
        </div><!-- .wrapper -->
      </div><!-- #navbar -->
    </header>
    
    <div class="wrapper clearfix">

      <section class="col-2 first shadow">
        <!-- Contact Form -->
        <form action="problem.php" method="post">
          <label for="fullname">Name</label>
          <input type="text" id="fullname" name="name" placeholder="your name" required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="your email" required><br>
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="your Id" required>
          <label for="message">Message</label>
          <textarea id="message" name="sms" rows="10"></textarea>
          <input type="submit" value="send">
        </form>
      </section>

      

    </div><!-- .wrapper -->
  </div><!-- .white-wood -->

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