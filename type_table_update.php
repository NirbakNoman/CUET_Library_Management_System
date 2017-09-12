<?php

	$conn=mysql_connect("localhost","root","");
     $db=mysql_select_db("cuet_library",$conn);
	 
	 
	$ty_upd=$_POST['type_upd'];
	$type_new_name=$_POST['t_name'];
	//echo $id;
	
	
	
	$sql="Update type set type_name='$type_new_name' WHERE type_id='$ty_upd'";
	
	
	
	$result=mysql_query($sql);
	//echo "1";
	
	
	if($result==1){
		header('Location: type_table.php');
	}
	
	else{
		echo "not success";
	}
	mysql_close($conn);
	
	
?>