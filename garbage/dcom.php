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
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
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

        $q1 = "select avg(q1) from dcom";
        $result = mysql_query($q1);
        $row = mysql_fetch_array($result);
        $q1 = $row[0];
        $q1 /= 0.03;
        $q1 = round($q1, 2);

        $q2 = "select avg(q2) from dcom";
        $result = mysql_query($q2);
        $row = mysql_fetch_array($result);
        $q2 = $row[0];
        $q2 /= 0.04;
        $q2 = round($q2, 2);

        $q3 = "select avg(q3) from dcom";
        $result = mysql_query($q3);
        $row = mysql_fetch_array($result);
        $q3 = $row[0];
        $q3 /= 0.03;
        $q3 = round($q3, 2);

        $q4 = "select avg(q4) from dcom";
        $result = mysql_query($q4);
        $row = mysql_fetch_array($result);
        $q4 = $row[0];
        $q4 /= 0.04;
        $q4 = round($q4, 2);

        $q5 = "select avg(q5) from dcom";
        $result = mysql_query($q5);
        $row = mysql_fetch_array($result);
        $q5 = $row[0];
        $q5 /= 0.04;
        $q5 = round($q5, 2);

        $q6 = "select avg(q6) from dcom";
        $result = mysql_query($q6);
        $row = mysql_fetch_array($result);
        $q6 = $row[0];
        $q6 /= 0.05;
        $q6 = round($q6, 2);

        $q7 = "select avg(q7) from dcom";
        $result = mysql_query($q7);
        $row = mysql_fetch_array($result);
        $q7 = $row[0];
        $q7 /= 0.05;
        $q7 = round($q7, 2);

        $q8 = "select avg(q8) from dcom";
        $result = mysql_query($q8);
        $row = mysql_fetch_array($result);
        $q8 = $row[0];
        $q8 /= 0.05;
        $q8 = round($q8, 2);

        $q9 = "select avg(q9) from dcom";
        $result = mysql_query($q9);
        $row = mysql_fetch_array($result);
        $q9 = $row[0];
        $q9 /= 0.05;
        $q9 = round($q9, 2);

        $q10 = "select avg(q10) from dcom";
        $result = mysql_query($q10);
        $row = mysql_fetch_array($result);
        $q10 = $row[0];
        $q10 /= 0.05;
        $q10 = round($q10, 2);
        
    
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

    echo "<nav class='navbar navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='#'>Online Feedback System</a>
    </div>
    <div>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='#''>Home</a></li>
        <li><a href='#'>Faculty Profiles</a></li>
        <li><a href='#'>Student Profies</a></li> 
        <li><a href='#'>My Previous feedbacks</a></li> 
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='#'><span class='glyphicon glyphicon-user' id='welcome' ></span></a></li>
        <li><a href='#''><span class='glyphicon glyphicon-log-in'></span> &nbsp;Log Out </a></li>
      </ul>
    </div>
  </div>
</nav>
    
    
    <div class='container2 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
        <h1 class='page-header' align='center'>Digital Communication</h1>
        
        <div class='container body-text2 form-group'>
            <h2>Feedback for theory classes</h2>
                <br>
                <p><b>1.</b> The lecturer(s) communicated the learning outcomes of dcom to me:</p>
            
                <br>
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q1."%'>".
                            ($q1)
                        ."%</div>
                    </div>
                    <div class='col-md-4'>
                        <p class='text-danger'>Unclearly</p>
                    </div>
                    <div class='col-md-4'>
                        <p class='text-warning'>Clearly</p>
                    </div>
                    <div class='col-md-4'>
                        <p class='text-success'>Very clearly</p>
                    </div>
                </div>
                
                
                <br><br><br>
                <p><b>2.</b> I was clear about the assessment and examination requirements:</p>
            
                <br>
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q2."%'>".
                            ($q2).
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>Strongly disagree</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>Disagree</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>Agree</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>Strongly Agree</p>
                    </div>
                </div>
                
                
                <br><br><br>
                <p><b>3.</b> The various parts of this course (lectures, tutorials, seminars, labs etc.) were linked:</p>
                <br>
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q3."%'>"
                            .$q3.
                        "%</div>
                    </div>
                    <div class='col-md-4'>
                        <p class='text-danger'>Unclearly</p>
                    </div>
                    <div class='col-md-4'>
                        <p class='text-warning'>Clearly</p>
                    </div>
                    <div class='col-md-4'>
                        <p class='text-success'>Very clearly</p>
                    </div>
                </div>
                
                
                <br><br><br>
                <p><b>4.</b> Compared with other courses of the similar size the workload was: </p>
                <br>
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q4."%'>"
                            .$q4.
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>Much heavier</p> 
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>Heavier</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>Lighter</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>Much lighter</p>
                    </div>
                </div>
                
                <br><br><br>
                <p><b>5.</b> I found the content of this course: </p>
                <br>
                <br>
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q5."%'>"
                            .$q5.
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>Very hard</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>Hard</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>Easy</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>Very easy</p>
                    </div>
                </div>
                
                <br><br><br>
                <span>
                    <p><b>6.</b> I get clear responses to what I say in class; I find out how to improve.</p>
                </span>
                <br>

                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q6."%'>"
                            .$q6.
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>0%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>33%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>66%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>100%</p>
                    </div>
                </div>

                <br><br><br>
                <span>
                    <p><b>7.</b> The writing assignments are clear to me; I know what the task is.</p>
                </span>
                <br>    
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q7."%'>"
                            .$q7.
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>0%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>33%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>66%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>100%</p>
                    </div>
                </div>
                
                <br><br><br>
                <span>
                    <p><b>8.</b> The instructor effectively directs and stimulates discussion.</p>
                </span>
                <br>    
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q8."%'>"
                            .$q8.
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>0%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>33%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>66%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>100%</p>
                    </div>
                </div>
                
                <br><br><br>

                <span>
                    <p><b>9.</b> The instructor effectively encourages students to ask questions and give answers</p>
                </span>
                <br>    
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q9."%'>"
                            .$q9.
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>0%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>33%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>66%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>100%</p>
                    </div>
                </div>
                
                <br><br><br>

                <span>
                    <p><b>10.</b> Explains material clearly </p>
                </span>
                <br>    
                <div class='progress2'>
                    <div class='progress progress2'>
                        <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$q10."%'>"
                            .$q10.
                        "%</div>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-danger'>0%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-warning'>33%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-info'>66%</p>
                    </div>
                    <div class='col-md-3'>
                        <p class='text-success'>100%</p>
                    </div>
                </div>
                
                <br><br><br><br><br>
            </div>
        <div align='center'>
            <a href='dcomfull.php?id=$id'><button type='button' class='btn btn-primary' id='allfeedback'>View all feedbacks</button></a>
        </div>
        <br><br><br><br><br><br>";
        ?>
</body>
</html>