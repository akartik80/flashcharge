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
<link rel="stylesheet" href="css/student.css">
    
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
  
</head>

<body onload="document.getElementById('welcome').innerHTML = '<?php echo "Welcome ".strtoupper($_GET['id']) ?>'">
    <?php
        $id = $_GET['id'];

        $connection = mysql_connect ("localhost", "root", "titanic");
        $db = mysql_select_db ("Student", $connection);
        $q = "select CourseID from cid_fid where FacultyID = '$id'";
        $result = mysql_query ($q);

        $arr = array();
        $i = 0;

        while ($row = mysql_fetch_array ($result)) {
            $arr[$i] = $row['CourseID'];
            $i++;
        }

        $arr_l = count($arr);
    
        if ($id == 'sv') {
            echo "<div class='container-fluid'>
                <div class='row'>
                    <div class='col-sm-3 col-md-2 sidebar side'>
                
                        <ul class='nav nav-sidebar'>
                            <li><a href='#'>How it works?<span class='sr-only'>(current)</span></a></li>
                            <li class='active'  id='sub1'><a href='".strtolower($arr[0]).".php?id=".$id."'>$arr[0]</a></li>";

                        if ($arr_l == 2) {
                            echo "<li id='sub2'><a href='".strtolower($arr[1]).".php?id=".$id."'>$arr[2]</a></li>";
                        }
                
                        if ($arr_l == 3) {
                            echo "<li id='sub3'><a href='".$arr[2].".php?id=".$id."'>$arr[2]</a></li>";
                        }

                        if ($arr_l == 4) {
                            echo "<li id='sub4'><a href='".$arr[3].".php?id=".$id."'>$arr[3]</a></li>";
                        }
            echo "</ul>
                    </div>
                </div>
            </div>";
        } else {
            echo "<div class='container-fluid'>
            <div class='row'>
                <div class='col-sm-3 col-md-2 sidebar side'>
            
                    <ul class='nav nav-sidebar'>
                        <li><a href='admin.php'>How it works?</a></li>
                        <li class='active' id='sub1'><a href='admin_sem1.php'>Sem 1</a></li>
                        <li id='sub2'><a href='admin_sem2.php'>Sem 2</a></li>
                        <li id='sub3'><a href='admin_sem3.php'>Sem 3</a></li>
                        <li id='sub4'><a href='admin_sem4.php'>Sem 4</a></li>
                        <li id='sub5'><a href='admin_sem5.php'>Sem 5</a></li>
                        <li id='sub6'><a href='admin_sem6.php'>Sem 6</a></li>
                        <li id='sub7'><a href='admin_sem7.php'>Sem 7</a></li>
                        <li id='sub8'><a href='admin_sem8.php'>Sem 8</a></li>

                
        </ul>
            </div>
        </div>
    </div>";
        }
    ?>
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Feedback System</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Faculty Profiles</a></li>
        <li><a href="#">Student Profies</a></li> 
        <li><a href="#">My Previous feedbacks</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user" id="welcome" ></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Log Out </a></li>
      </ul>
    </div>
  </div>
</nav>
    
    
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header" align="center">How it works</h1>
        <div class="body-text">
            "Welcome to the online feedback system. You can give the feedback for your courses to corresponding faculty. Each time you login into the system you will get your courses listed according to your branch and semester and you can give feedback for a course only once a semester. The faculty will not be knowing your name and ID. Your feedback will be completely anonymous. Use of immoral language will be seriously dealt by the system administrator and the student will be punished accordingly. <br> </br>
            Questions marked with '*' are must to answer. The courses with dedicated lab also involves feedback for lab, so suggestions and issues are welcomed from your side and faculty ought to consider the feedback and do the needful as and when required. <br> <br>

            Giving a healthy feedback will be beneficial for you only.
        </div>
    </div>
    
    
</body>
</html>