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
                <br>";
                
                $q = "select * from dcom";
                $result = mysql_query ($q);

                /*if ($result) {
                    echo "ho gya";
                } else {
                    echo "nhi hua";
                }*/

                echo "<table class='table table-hover table-responsive'>
                        <thead>
                        <tr>
                            <th>Q1</th>
                            <th>Q2</th>
                            <th>Q3</th>
                            <th>Q4</th>
                            <th>Q5</th>
                            <th>Q6</th>
                            <th>Q7</th>
                            <th>Q8</th>
                            <th>Q9</th>
                            <th>Q10</th>
                            <th>Q11</th>
                            <th>Q12</th>
                        </tr>
                        </thead>";

                while ($row = mysql_fetch_array ($result)) {
                    echo "<tr>";
                    for ($i = 1; $i < 6; $i++) {
                        echo "<td>".chr($row[$i] + 97)."</td>";
                    }

                    for ($i = 6; $i < 13; $i++) {
                        echo "<td>".$row[$i]."</td>";
                    }

                    echo "</tr>";
                }

                
                echo "</table><br><br><br>
                <div align='center'>
                    <a href='dcom.php?id=$id'><button type='button' class='btn btn-primary' id='allfeedback'>View average feedbacks</button></a>
                </div>
                <br><br><br><br><br>
            </div>
        <br><br><br><br><br><br>";
           echo "</div>
        <br><br><br><br><br><br>";
        ?>
</body>
</html>