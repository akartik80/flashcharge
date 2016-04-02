<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/login.css" >

    
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

<script src="js/login.js"></script>

<style type="text/css">
  body {
    background: url(images/back.png) no-repeat center center fixed;
  }
</style>

<body>
<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="" role="login">
          
          <?php
            error_reporting(E_ERROR);

            if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    
                    $connection = mysql_connect("localhost", "root", "project");
                    $db = mysql_select_db ("flashcharge", $connection);

                    $sql = "select * from customer where email = '$email' && password = '$password'";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_assoc($result);
                      //echo $row;
                    if ($row) {
                      echo "<script>window.location.replace('home.php');</script>";
                    } else {
                      echo "Please register first.<br>";
                    }
            }
          ?>

          <img src="images/login.png" class="img-responsive" alt="login" height="10">
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>
          
          <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" required/>
          
          <button type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="signup.php">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="#">www.onlinefeedback.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
  <p>
    <br>
    <br>
    
  </p>     
  
  
</div>
</body>
</html>
