<!doctype html>
<html>
<head>
    <title> Online Feedback System</title>
<meta charset="utf-8">
<title>Untitled Document</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

<style type="text/css">
@import url("css/dbms.css");
</style>

</head>

<body background="images/background.jpg">
<table align = "right" class = "pri_nav">
<tr>
<td> <a href = "index.html">Login</a> &nbsp; &nbsp; | &nbsp; &nbsp;</td>
<td> <a href = "signup.php" class="active">Register</a> &nbsp; &nbsp;| &nbsp; &nbsp;</td>
<td> <a href = "contact.html">Contact Us</a> &nbsp; &nbsp; </td>
</tr>
</table>
    
<img src="images/students.gif" alt="Image" style="width:1000px; height:650px;" class="student">

<img src="images/feedback.gif" style="width: 350px; height: 300px;" class="feedback">

<div class="bs-example">
    <form name="form1" action="" method="post" id="signup">
        <?php 
    if (isset ($_POST['submit'])) {
	   $name = $_POST['name'];
	   $id = $_POST['id'];
	   $pwd = $_POST['pass'];
	   $confirm_pwd = $_POST['pass2'];
	   if ($pwd == $confirm_pwd) {
		      $connection = mysql_connect("localhost", "root", "titanic");
           
           if (!$connection) {
               echo "Connection failed";
           }
           
		  $db = mysql_select_db ("Student", $connection);
		  $check_existing = "select * from student_record where Roll_No = '$id'";
		  $result = mysql_query($check_existing);
		  $count = 0;
          $count = mysql_num_rows($result);
		  
		  if ($count > 0){
			 echo "User ID exists"."<br>";
		  } else {
              if ($name == "" || $id == "") {
                  echo "All the fields are required";
              } else {
			     echo "We have sent an email to you."."<br>"."Please verify your account by clicking on the activation link"."<br>";
                 $sql = "insert into student_record values ('$name', '$id', '$pwd', 0)";
                     $result = mysql_query($sql);
              }
		  }
	   } else {
		  echo "<br>"."Password do not match";
	   }
    } 
?>
        
        <div class="form-group">
            <label for="details">Details:</label>
            <input type="text" class="form-control" id="name" placeholder="Name" size="30" name="name" onkeydown="if (event.keyCode == 13) document.getElementById('button').click()">
            <input type="text" name="id" class="form-control" placeholder="Enrollment no." id="id" onkeydown="if (event.keyCode == 13) document.getElementById('button').click()">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass" onkeydown="if (event.keyCode == 13) document.getElementById('button').click()">
            <input type="password" class="form-control" id="retypePassword" placeholder="Retype Password" name="pass2" onkeyup="checkPass()" onkeydown="if (event.keyCode == 13) document.getElementById('button').click()">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
       
        <button type="button" class="btn btn-primary" id="sub" name="sub" disabled="true" onclick="checkvalid()">Register</button>
        <button type="submit" name="submit" value="submit" id="submit" hidden="true">submit</button>
    </form>
</div>
</body>
</html>                                		
</form>

</body>
</html>