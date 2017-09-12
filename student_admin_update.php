<?php

$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("cuet_library",$connection);

if(!$connection)
{

die('could not connect :'.mysql_error);
}

$st_id=$_POST['s_id'];
$up_status=$_POST['u_status'];

     $sql="Update registration set status='$up_status' where student_id='$st_id';

    $result=mysql_query($sql);
	
	
	
	if($result==1){
		header('Location: student_admin_page.php');
	}
	
	else{

		echo "no\t success"  ;
		
	}




     mysql_close($connection);

?>