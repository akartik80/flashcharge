<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name= "form" method="post" action="">

<?php
if (isset ($_POST['submit'])) {
$connection = mysql_connect ("localhost", "root", "");
if ($connection)
echo "Ban gaya";
else
echo "nhi bana";
$db = mysql_select_db("onlinefeedback", $connection);

$s_id = "iit2013087";
echo "Hello";
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
echo "$q1";
$q  = "insert into daa (Student_id, Q1, Q2, Q3, Q4, Q5) values ('$s_id', '$q1', '$q2', '$q3', '$q4', '$q5')";
$result = mysql_query ($q);
if ($result)
echo "query success. <br>";
else
echo "Query failure<br>";
}
?>
The lecturer(s) communicated the learning outcomes of this course to me:</p>
            
              <label><input type="radio" name="q1" value = "a">Clearly</label>
                         <label><input type="radio" name="q1" value="b">Very clearly</label>
                          <label><input type="radio" name="q1" value="c">Unclearly</label>
				<p><b>2.</b> I was clear about the assessment and examination requirements:</p>
				<label><input type="radio" name="q2" value = "a">Agree</label>
                         <label><input type="radio" name="q2" value="b">Strongly Agree</label>
                          <label><input type="radio" name="q2" value="c">Disagreed</label>
				 <br>
                <p><b>3.</b> The various parts of this course (lectures, tutorials, seminars, labs etc.) were linked:</p>
   				<label><input type="radio" name="q3" value = "a" />Fully</label>
                         <label><input type="radio" name="q3" value="b">Partially</label>
                          <label><input type="radio" name="q3" value="c">Not At all</label>
				 <br>
	
				 <p><b>4.</b> Compared with other courses of the similar size the workload was: </p>
				 <label><input type="radio" name="q4" value = "a" />Lighter</label>
                         <label><input type="radio" name="q4" value="b">Heavy</label>
                          <label><input type="radio" name="q4" value="c">Very Heavy</label>
				 <br>
				 <p><b>5.</b> I found the content of this course: </p>
				<label><input type="radio" name="q5" value = "a" />Hard</label>
                         <label><input type="radio" name="q5" value="b">Easy</label>
                          <label><input type="radio" name="q5" value="c">Very Easy</label>
				 <br>
      <input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
