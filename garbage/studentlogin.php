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
<td> <a href = "index.html" class="active">Login</a> &nbsp; &nbsp; | &nbsp; &nbsp;</td>
<td> <a href = "signup.php">Register</a> &nbsp; &nbsp;| &nbsp; &nbsp;</td>
<td> <a href = "contact.html">Contact Us</a> &nbsp; &nbsp; </td>
</tr>
</table>
    
<img src="images/students.gif" alt="Image" style="width:1000px; height:650px;" class="student">

<img src="images/feedback.gif" style="width: 350px; height: 300px;" class="feedback">

<div class="bs-example">
    <form name="form1" action="" method="post" id="studentloginform">
        <?php
//do for wrong password and flag = 0
            if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $pass = $_POST['pass'];
                    
                    $connection = mysql_connect("localhost", "root", "titanic");
                    $db = mysql_select_db ("Student", $connection);
                    $sql = "select * from student_record where roll_no = '$id' && password = '$pass' && flag = 1";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_assoc($result);
                
                    if ($row) {
                        //echo "Login successful.<br>";
                        header("Location: student.php?Roll_No=$id");
                        $_SESSION['email'] = $id;
                    } else {
                        echo "Please register first.<br>";
                    }
            }
        ?>
        <div class="form-group">
            <label for="details">Details:</label>
            
            <input type="text" name="id" class="form-control" placeholder="Enrollment no." id="id"  onkeyup="checkvalid2()">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass" onkeyup="checkvalid2()">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary" id="submit" name="submit" disabled="true">Login</button>
    </form>
</div>
</body>
</html>                                		
</form>

</body>
</html>