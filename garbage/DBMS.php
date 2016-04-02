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
        $q = "select * from daa where Student_id = '$id'";
        $result = mysql_query ($q);
        $row = mysql_fetch_array($result);

        if ($row[0]) {
            $submitted = 1;
        } else {
            $submitted = 0;
        }
    
        echo "<div class='container-fluid'>
            <div class='row'>
                <div class='col-sm-3 col-md-2 sidebar side'>
            
                    <ul class='nav nav-sidebar'>
                        <li><a href='student.php?Roll_No=".$id."'>How it works?<span class='sr-only'>(current)</span></a></li>
                        <li id='sub1'><a href='".$arr[0].".php?Roll_No=".$id."'>$arr[0]</a></li>
                        <li class='active' id='sub2'><a href='".$arr[1].".php?Roll_No=".$id."'>$arr[1]</a></li>
                        <li id='sub3'><a href='".$arr[2].".php?Roll_No=".$id."'>$arr[2]</a></li>
                        <li id='sub4'><a href='".$arr[3].".php?Roll_No=".$id."'>$arr[3]</a></li>
                        <li id='sub5'><a href='".$arr[4].".php?Roll_No=".$id."'>$arr[4]</a></li>
                    </ul>";
            
                    if ($arr_l == 6) {
                        echo "<li id='sub6'><a href='".$arr[5].".php'>$arr[5]</a></li>";
                    }
    echo "</div>
        </div>
    </div>";


    if (isset ($_POST['submit'])) {
        $connection = mysql_connect ("localhost", "root", "titanic");
        $db = mysql_select_db("Student", $connection);

        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $q10 = $_POST['q10'];
        $q11 = $_POST['q11'];
        $q12 = $_POST['q12'];
        $q13 = $_POST['q13'];

        $q  = "insert into dbms values ('$id', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13')";
        $result = mysql_query ($q);
        header("Location: thankyou.php?c_id=DBMS&Roll_No=$id");
    }
    
    echo "<nav class='navbar navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='#'>Online Feedback System</a>
    </div>
    <div>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='#'>Home</a></li>
        <li><a href='#'>Faculty Profiles</a></li>
        <li><a href='#'>Student Profies</a></li> 
        <li><a href='#'>My Previous feedbacks</a></li> 
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='#'><span class='glyphicon glyphicon-user' id='welcome' ></span></a></li>
        <li><a href='#'><span class='glyphicon glyphicon-log-in'></span> &nbsp;Log Out </a></li>
      </ul>
    </div>
  </div>
</nav>";
    
    if ($submitted == 0) { 
        echo "<div class='container2 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
            <h1 class='page-header' align='center'>Design and Analysis of Algorithms</h1>
            
            <div class='container body-text2 form-group'>
                <h2>Feedback for theory classes</h2>
                <form name='feedback' action='' method='post' id='feedback' onsubmit= 'return validateForm()'>
                    <br>
                    <p><b><font color='red'>*</font> 1.</b> The lecturer(s) communicated the learning outcomes of PPL to me:</p>
                
                    <div class='radio'>
                        <label><input type='radio' name='q1' value = '1'>Unclearly</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q1' value = '2'>Clearly</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q1' value = '3'>Very clearly</label>
                    </div>
                    
                    <br>
                    <p><b><font color='red'>*</font> 2.</b> I was clear about the assessment and examination requirements:</p>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '1'>Strongly disagree</label>
                    </div>
                       
                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '2'>Disagree</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '3'>Agree</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '4'>Strongly agree</label>
                    </div>
     
                    <br>
                    <p><b><font color='red'>*</font> 3.</b> The various parts of this course (lectures, tutorials, seminars, labs etc.) were linked:</p>
                
                    <div class='radio'>
                        <label><input type='radio' name='q3' value = '1'>Not at all</label>
                    </div>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q3' value = '2'>Partially</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q3' value = '3'>Fully</label>
                    </div>

                    <br>
                    <p><b><font color='red'>*</font> 4.</b> Compared with other courses of the similar size the workload was: </p>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q4' value='1'>Much heavier</label>
                    </div>


                    <div class='radio'>
                        <label><input type='radio' name='q4' value = '2'>Heavier</label>
                    </div>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q4' value = '3'>Lighter</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q4' value = '4'>Much lighter</label>
                    </div>
        
                    <br>
                    <p><b><font color='red'>*</font> 5.</b> I found the content of this course: </p>
                
                    <div class='radio'>
                        <label><input type='radio' name='q5' value='1'>Very hard</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q5' value='2'>Hard</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q5' value='3'>Easy</label>
                    </div>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q5' value='4'>Very easy</label>
                    </div>
                    
                    <br>
                        
                    <span>
                        <p><b><font color='red'>*</font> 6.</b> I get clear responses to what I say in class; I find out how to improve.</p>
                    </span>
                    <br>
                    <span class = 'stars'>
                        <input class='star star-5' id='star-51' type='radio' name='q6' value='5'/>
                        <label class='star star-5' for='star-51'></label>
                        <input class='star star-4' id='star-41' type='radio' name='q6' value='4'/>
                        <label class='star star-4' for='star-41'></label>
                        <input class='star star-3' id='star-31' type='radio' name='q6' value='3'/>
                        <label class='star star-3' for='star-31'></label>
                        <input class='star star-2' id='star-21' type='radio' name='q6' value='2'/>
                        <label class='star star-2' for='star-21'></label>
                        <input class='star star-1' id='star-11' type='radio' name='q6' value='1'/>
                        <label class='star star-1' for='star-11'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 7.</b> The writing assignments are clear to me; I know what the task is.</p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-52' type='radio' name='q7' value='5'/>
                        <label class='star star-5' for='star-52'></label>
                        <input class='star star-4' id='star-42' type='radio' name='q7' value='4'/>
                        <label class='star star-4' for='star-42'></label>
                        <input class='star star-3' id='star-32' type='radio' name='q7' value='3'/>
                        <label class='star star-3' for='star-32'></label>
                        <input class='star star-2' id='star-22' type='radio' name='q7' value='2'/>
                        <label class='star star-2' for='star-22'></label>
                        <input class='star star-1' id='star-12' type='radio' name='q7' value='1'/>
                        <label class='star star-1' for='star-12'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 8.</b>The instructor effectively directs and stimulates discussion.</p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-53' type='radio' name='q8' value='5'/>
                        <label class='star star-5' for='star-53'></label>
                        <input class='star star-4' id='star-43' type='radio' name='q8' value='4'/>
                        <label class='star star-4' for='star-43'></label>
                        <input class='star star-3' id='star-33' type='radio' name='q8' value='3'/>
                        <label class='star star-3' for='star-33'></label>
                        <input class='star star-2' id='star-23' type='radio' name='q8' value='2'/>
                        <label class='star star-2' for='star-23'></label>
                        <input class='star star-1' id='star-13' type='radio' name='q8' value='1'/>
                        <label class='star star-1' for='star-13'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 9.</b> The instructor effectively encourages students to ask questions and give answers</p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-54' type='radio' name='q9' value='5'/>
                        <label class='star star-5' for='star-54'></label>
                        <input class='star star-4' id='star-44' type='radio' name='q9' value='4'/>
                        <label class='star star-4' for='star-44'></label>
                        <input class='star star-3' id='star-34' type='radio' name='q9' value='3'/>
                        <label class='star star-3' for='star-34'></label>
                        <input class='star star-2' id='star-24' type='radio' name='q9' value='2'/>
                        <label class='star star-2' for='star-24'></label>
                        <input class='star star-1' id='star-14' type='radio' name='q9' value='1'/>
                        <label class='star star-1' for='star-14'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 10.</b> Explains material clearly </p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-55' type='radio' name='q10' value='5'/>
                        <label class='star star-5' for='star-55'></label>
                        <input class='star star-4' id='star-45' type='radio' name='q10' value='4'/>
                        <label class='star star-4' for='star-45'></label>
                        <input class='star star-3' id='star-35' type='radio' name='q10' value='3'/>
                        <label class='star star-3' for='star-35'></label>
                        <input class='star star-2' id='star-25' type='radio' name='q10' value='2'/>
                        <label class='star star-2' for='star-25'></label>
                        <input class='star star-1' id='star-15' type='radio' name='q10' value='1'/>
                        <label class='star star-1' for='star-15'></label>
                    </span>
                    <br><br><br><br>

                    <p><b>11.</b>What do you think is this instructor's greatest strength? </p>
                    <br>

                    <label for='comment'>Comment:</label>
                    <textarea class='form-control width' rows='5' id='comment' name='q11' form='feedback' placeholder='200 characters max' maxlength='200'></textarea>
                    <br><br>

                    <p><b>12.</b>What suggestions would you give to improve this instructor's teaching? </p>
                    <br>

                    <label for='comment'>Comment:</label>
                    <textarea class='form-control width' rows='5' id='comment' name='q12' placeholder='200 characters max' maxlength='200' form='feedback'></textarea>
                    <br><br>

                    <p><b>13.</b>Approximately how many class meetings have you attended so far? </p>
                    <br>

                    <label for='comment'>Comment:</label>
                    <textarea class='form-control width' rows='5' id='comment' name='q13' placeholder='200 characters max' maxlength='200'></textarea>
                    <br><br>

                    <button type='submit' class='btn btn-primary' id='submit' name='submit' value='submit'>Submit</button>
                    &nbsp; &nbsp;
                    <button type='reset' class='btn btn-primary' id='reset' name='reset' value='reset'>Reset</button>
                    <br><br><br><br><br><br>
                </form>
            </div>";
        } else {
            echo "<div class='container2 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
            <h1 class='page-header' align='center'>Design and Analysis of Algorithms</h1>
            
            <div class='container body-text2 form-group'>
                <h2>Feedback for theory classes</h2>
                <form name='feedback' action='' method='post' id='feedback' onsubmit= 'return validateForm()'>
                    <br>
                    <p><b><font color='red'>*</font> 1.</b> The lecturer(s) communicated the learning outcomes of PPL to me:</p>
                
                    <div class='radio'>
                        <label><input type='radio' name='q1' value = '1'>Unclearly</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q1' value = '2'>Clearly</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q1' value = '3'>Very clearly</label>
                    </div>
                    
                    <br>
                    <p><b><font color='red'>*</font> 2.</b> I was clear about the assessment and examination requirements:</p>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '1'>Strongly disagree</label>
                    </div>
                       
                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '2'>Disagree</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '3'>Agree</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q2' value = '4'>Strongly agree</label>
                    </div>
     
                    <br>
                    <p><b><font color='red'>*</font> 3.</b> The various parts of this course (lectures, tutorials, seminars, labs etc.) were linked:</p>
                
                    <div class='radio'>
                        <label><input type='radio' name='q3' value = '1'>Not at all</label>
                    </div>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q3' value = '2'>Partially</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q3' value = '3'>Fully</label>
                    </div>

                    <br>
                    <p><b><font color='red'>*</font> 4.</b> Compared with other courses of the similar size the workload was: </p>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q4' value='1'>Much heavier</label>
                    </div>


                    <div class='radio'>
                        <label><input type='radio' name='q4' value = '2'>Heavier</label>
                    </div>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q4' value = '3'>Lighter</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q4' value = '4'>Much lighter</label>
                    </div>
        
                    <br>
                    <p><b><font color='red'>*</font> 5.</b> I found the content of this course: </p>
                
                    <div class='radio'>
                        <label><input type='radio' name='q5' value='1'>Very hard</label>
                    </div>
        
                    <div class='radio'>
                        <label><input type='radio' name='q5' value='2'>Hard</label>
                    </div>

                    <div class='radio'>
                        <label><input type='radio' name='q5' value='3'>Easy</label>
                    </div>
                    
                    <div class='radio'>
                        <label><input type='radio' name='q5' value='4'>Very easy</label>
                    </div>
                    
                    <br>
                        
                    <span>
                        <p><b><font color='red'>*</font> 6.</b> I get clear responses to what I say in class; I find out how to improve.</p>
                    </span>
                    <br>
                    <span class = 'stars'>
                        <input class='star star-5' id='star-51' type='radio' name='q6' value='5'/>
                        <label class='star star-5' for='star-51'></label>
                        <input class='star star-4' id='star-41' type='radio' name='q6' value='4'/>
                        <label class='star star-4' for='star-41'></label>
                        <input class='star star-3' id='star-31' type='radio' name='q6' value='3'/>
                        <label class='star star-3' for='star-31'></label>
                        <input class='star star-2' id='star-21' type='radio' name='q6' value='2'/>
                        <label class='star star-2' for='star-21'></label>
                        <input class='star star-1' id='star-11' type='radio' name='q6' value='1'/>
                        <label class='star star-1' for='star-11'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 7.</b> The writing assignments are clear to me; I know what the task is.</p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-52' type='radio' name='q7' value='5'/>
                        <label class='star star-5' for='star-52'></label>
                        <input class='star star-4' id='star-42' type='radio' name='q7' value='4'/>
                        <label class='star star-4' for='star-42'></label>
                        <input class='star star-3' id='star-32' type='radio' name='q7' value='3'/>
                        <label class='star star-3' for='star-32'></label>
                        <input class='star star-2' id='star-22' type='radio' name='q7' value='2'/>
                        <label class='star star-2' for='star-22'></label>
                        <input class='star star-1' id='star-12' type='radio' name='q7' value='1'/>
                        <label class='star star-1' for='star-12'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 8.</b>The instructor effectively directs and stimulates discussion.</p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-53' type='radio' name='q8' value='5'/>
                        <label class='star star-5' for='star-53'></label>
                        <input class='star star-4' id='star-43' type='radio' name='q8' value='4'/>
                        <label class='star star-4' for='star-43'></label>
                        <input class='star star-3' id='star-33' type='radio' name='q8' value='3'/>
                        <label class='star star-3' for='star-33'></label>
                        <input class='star star-2' id='star-23' type='radio' name='q8' value='2'/>
                        <label class='star star-2' for='star-23'></label>
                        <input class='star star-1' id='star-13' type='radio' name='q8' value='1'/>
                        <label class='star star-1' for='star-13'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 9.</b> The instructor effectively encourages students to ask questions and give answers</p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-54' type='radio' name='q9' value='5'/>
                        <label class='star star-5' for='star-54'></label>
                        <input class='star star-4' id='star-44' type='radio' name='q9' value='4'/>
                        <label class='star star-4' for='star-44'></label>
                        <input class='star star-3' id='star-34' type='radio' name='q9' value='3'/>
                        <label class='star star-3' for='star-34'></label>
                        <input class='star star-2' id='star-24' type='radio' name='q9' value='2'/>
                        <label class='star star-2' for='star-24'></label>
                        <input class='star star-1' id='star-14' type='radio' name='q9' value='1'/>
                        <label class='star star-1' for='star-14'></label>
                    </span>
                    <br><br><br><br>
                    <span>
                        <p><b><font color='red'>*</font> 10.</b> Explains material clearly </p>
                    </span>
                    <br>    
                    <span class = 'stars'>
                        <input class='star star-5' id='star-55' type='radio' name='q10' value='5'/>
                        <label class='star star-5' for='star-55'></label>
                        <input class='star star-4' id='star-45' type='radio' name='q10' value='4'/>
                        <label class='star star-4' for='star-45'></label>
                        <input class='star star-3' id='star-35' type='radio' name='q10' value='3'/>
                        <label class='star star-3' for='star-35'></label>
                        <input class='star star-2' id='star-25' type='radio' name='q10' value='2'/>
                        <label class='star star-2' for='star-25'></label>
                        <input class='star star-1' id='star-15' type='radio' name='q10' value='1'/>
                        <label class='star star-1' for='star-15'></label>
                    </span>
                    <br><br><br><br>

                    <p><b>11.</b>What do you think is this instructor's greatest strength? </p>
                    <br>

                    <label for='comment'>Comment:</label>
                    <textarea class='form-control width' rows='5' id='comment' name='q11' form='feedback' placeholder='200 characters max' maxlength='200'></textarea>
                    <br><br>

                    <p><b>12.</b>What suggestions would you give to improve this instructor's teaching? </p>
                    <br>

                    <label for='comment'>Comment:</label>
                    <textarea class='form-control width' rows='5' id='comment' name='q12' placeholder='200 characters max' maxlength='200' form='feedback'></textarea>
                    <br><br>

                    <p><b>13.</b>Approximately how many class meetings have you attended so far? </p>
                    <br>

                    <label for='comment'>Comment:</label>
                    <textarea class='form-control width' rows='5' id='comment' name='q13' placeholder='200 characters max' maxlength='200'></textarea>
                    <br><br>

                    <button type='submit' class='btn btn-primary' id='submit' name='submit' value='submit' disabled='true'>Submit</button>
                    &nbsp; &nbsp;
                    <button type='reset' class='btn btn-primary' id='reset' name='reset' value='reset' disabled='true'>Reset</button>
                    <br><br>
                    You have already submitted feedback for DAA.    
                    <br><br><br><br>
                </form>
            </div>";
        }
        ?>
</body>
</html>