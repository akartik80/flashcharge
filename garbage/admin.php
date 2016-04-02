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
                        <li class='active'><a href='admin.php'>How it works?</a></li>
                        <li id='sub1'><a href='admin_sem1.php'>Sem 1</a></li>
                        <li id='sub2'><a href='admin_sem2.php'>Sem 2</a></li>
                        <li id='sub3'><a href='admin_sem3.php'>Sem 3</a></li>
                        <li id='sub4'><a href='admin_sem4.php'>Sem 4</a></li>
                        <li id='sub5'><a href='admin_sem5.php'>Sem 5</a></li>
                        <li id='sub6'><a href='admin_sem6.php'>Sem 6</a></li>
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
        ?>
</body>
</html>