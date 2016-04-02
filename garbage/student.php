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

<body onload="document.getElementById('welcome').innerHTML = '<?php echo "Welcome ".$_GET['Roll_No'] ?>'">
    <?php
        $id = $_GET['Roll_No'];
        $course = substr ($id, 1, 2);
        $year = substr ($id, 3, 4);
        $roll_no = substr ($id, 7, 3);
        $cur_year = date ("Y");
        
        if (date ("m") >= 1 && date ("m") <= 6)  {
            $sem = ($cur_year - $year)*2;
        } else {
            $sem = ($cur_year - $year)*2 + 1;
        }

        $connection = mysql_connect ("localhost", "root", "titanic");
        $db = mysql_select_db ("Student", $connection);
        $q = "select CourseID from courseid_sem where semester = '$sem'";
        $result = mysql_query ($q);
        $arr = array();
        $i = 0;

        while ($row = mysql_fetch_array ($result)) {
            $arr[$i] = $row['CourseID'];
            $i++;
        }

        $arr_l = count($arr);
    
        echo "<div class='container-fluid'>
            <div class='row'>
                <div class='col-sm-3 col-md-2 sidebar side'>
            
                    <ul class='nav nav-sidebar'>
                        <li class='active'><a href='#'>How it works?<span class='sr-only'>(current)</span></a></li>
                        <li id='sub1'><a href='".$arr[0].".php?Roll_No=".$id."'>$arr[0]</a></li>
                        <li id='sub2'><a href='".$arr[1].".php?Roll_No=".$id."'>$arr[1]</a></li>
                        <li id='sub3'><a href='".$arr[2].".php?Roll_No=".$id."'>$arr[2]</a></li>
                        <li id='sub4'><a href='".$arr[3].".php?Roll_No=".$id."'>$arr[3]</a></li>
                        <li id='sub5'><a href='".$arr[4].".php?Roll_No=".$id."'>$arr[4]</a></li>";
            
                    if ($arr_l == 6) {
                        echo "<li id='sub6'><a href='".$arr[5].".php?".$id."'>$arr[5]</a></li>";
                    }
    echo "</ul>
            </div>
        </div>
    </div>";
    ?>
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Feedback System</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="student.php?Roll_No=<?php echo $id?>">Home</a></li>
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