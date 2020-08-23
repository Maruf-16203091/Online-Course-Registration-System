

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Course Registration</title>

       
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
       
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
body {
    background-image: url("assets/image/b.jpg");
}
</style>

    </head>

    <body>

        <!-- Top content -->
       
            <div class="col-md-4 bann-info1" >
                        <div class="col-sm-12 col-sm-offset-1 text">
                        
            <h1 style="color: white">Registration Form </h1>   
                  
                        </div>                      
                    </div>
                <div class="container">
                    <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                     <div class="form-top">
                               
                                <div class="form-top-right">
                                <b><h1 style="color: white">Register Panel</h1></b>
                                   
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="reg.php" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="st_name">Student Name</label>
                                        <input type="text" name="st_name" placeholder="Student Name..." class="form-username form-control" id="form-username">
                                    </div>
                                     <div style="margin-bottom: 25px">
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
                                        <label class="sr-only" for="st_id">Student Id</label>
                                        <input type="text" name="st_id" placeholder="Student Id..." class="form-st_id form-control" id="st_id">
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="st_email">Student Email</label>
                                        <input type="email" name="st_email" placeholder="Email..." class="form-st_email form-control" id="st_email">
                                    </div>

                                     <div class="form-group">
                                        <label class="sr-only" for="st_phone">Phone</label>
                                        <input type="text" name="st_phone" placeholder="Phone..." class="form-st_phone form-control" id="st_phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" name="password"  placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
            
                                    <button style="color: black" type="submit" name="btn" class="btn">Register</button>
                                    <br><br>
                                    <a href = 'index.php'>Sign In</a>
                                  
                                     
                                </form>
                            </div>
                        </div>
                    </div>
                 
                    </div>
                </div>
            </div>
            
        </div>

    </body>

</html>