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

<body onload="document.getElementById('welcome').innerHTML = 'Welcome admin'">
    <?php
        $connection = mysql_connect ("localhost", "root", "titanic");
        $db = mysql_select_db ("Student", $connection);
               
        echo "<div class='container-fluid'>
            <div class='row'>
                <div class='col-sm-3 col-md-2 sidebar side'>
            
                    <ul class='nav nav-sidebar'>
                        <li><a href='admin.php'>How it works?</a></li>
                        <li id='sub1'><a href='admin_sem1.php'>Sem 1</a></li>
                        <li id='sub2'><a href='admin_sem2.php'>Sem 2</a></li>
                        <li class='active' id='sub3'><a href='admin_sem3.php'>Sem 3</a></li>
                        <li id='sub4'><a href='admin_sem4.php'>Sem 4</a></li>
                        <li id='sub5'><a href='admin_sem5.php'>Sem 5</a></li>
                        <li id='sub6'><a href='admin_sem6.php'>Sem 6</a></li>
                        <li id='sub7'><a href='admin_sem7.php'>Sem 7</a></li>
                        <li id='sub8'><a href='admin_sem8.php'>Sem 8</a></li>

                
        </ul>
            </div>
        </div>
    </div>";

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
</nav>";
    
    echo "<div class='container2 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
    <table class='table table-hover table-responsive'>
                        <thead>
                        <tr>
                            <th>Subjects</th>
                            <th>Faculty ID</th>
                            <th>Faculty Name</th>
                            <th>View average feedback</th>
                            <th>View all feedback</th>
                        </tr>
                        </thead>";

                        $q = "select * from courseid_sem where Semester = 3";
                        $result = mysql_query ($q);
                        
                        while ($row = mysql_fetch_array ($result)) {
                            echo "<tr>";
                            echo "<td>".$row[0]."</td><td>";
                            //echo $row[0];
                            $q1 = "select FacultyID from cid_fid where CourseID = '$row[0]'";
                            $result1 = mysql_query($q1);
                            $count = 0;
                            
                            while ($row1 = mysql_fetch_array ($result1)) {
                                if ($count) {
                                    echo "<tr>";
                                    echo "<td>".$row[0]."</td><td>";    
                                }

                                $count++;

                                echo "$row1[0] ";
                                $q2 = "select Name from faculty join cid_fid where faculty.id = cid_fid.FacultyID and faculty.id = '$row1[0]' and CourseID = '$row[0]'";
                                $result2 = mysql_query($q2);

                                if ($result2) {
                                    //echo "ban gya";
                                } else {
                                    //echo "nhi bna";
                                }

                                while ($row2 = mysql_fetch_array($result2)) {
                                    echo "</td><td>";
                                    echo "$row2[0] ";

                                }
                                echo "</td><td>";
                            echo "<a href=".strtolower($row[0]).".php?id=admin><button type='button' class='btn btn-primary' id='allfeedback'>View average feedbacks</button></a></td><td>";
                            echo "<a href='admin_full.php?sub=$row[0]'><button type='button' class='btn btn-warning' id='allfeedback'>View all feedbacks</button></a></td>";
                            //echo $q1;

                            } 
                        }
    echo "</table>";
        ?>
</body>
</html>