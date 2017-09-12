<?php


	$conn=mysql_connect("localhost","root","");
     $db=mysql_select_db("cuet_library",$conn);


$st_id=$_POST['s_id'];
$up_status=$_POST['u_status'];



	//echo $id;
  $sql="Update registration set status='$up_status' where student_id='$st_id'";
	
	
	$result=mysql_query($sql);
	
	
	
	if($result==1){
		header('Location: student_admin_page.php');
	}
	else{
		echo "not success";
	}
	
	
	mysql_close($conn);
	
	
?>