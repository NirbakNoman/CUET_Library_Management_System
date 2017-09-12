
<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("cuet_library", $connection); 
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }

 // Fetching variables of the form which travels in URL
$id=$_POST['s_id'];
$name = $_POST['name'];

$st_dept=$_POST['s_dept'];
$pass = $_POST['pass'];
$con_pass = $_POST['cpass'];
$bank_r = $_POST['b_receipt'];


//Insert Query of SQL
$query = mysql_query("insert into registration(student_id, user_name,department, pass, con_pass,b_ac) values ('$id', '$name','$st_dept', '$pass', '$con_pass','$bank_r')");

echo "<br/><br/><span>you are successfully registered!! wait until verification...</span>";


mysql_close($connection); // Closing Connection with Server
?>




