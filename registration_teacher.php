
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("cuet_library", $connection); // Selecting Database from Server
if (!$connection)
  {
  die('Could not connect: ' .mysql_error());
  }

 // Fetching variables of the form which travels in URL
$t_id=$_POST['te_id'];
$t_name = $_POST['te_name'];
$te_dept=$_POST['t_dept'];
$te_pass = $_POST['teacher_pass'];
$t_con_pass = $_POST['teacher_cpass'];



//Insert Query of SQL
$query = mysql_query("insert into reg_teacher(teacher_id, teacher_name,teacher_department, t_pass, t_cpass) values ('$t_id', '$t_name','$te_dept', '$te_pass', '$t_con_pass')");

echo "<br/><br/><span>Data Inserted successfully...!!</span>";


mysql_close($connection); // Closing Connection with Server
?>




