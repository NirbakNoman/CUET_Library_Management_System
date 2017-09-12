<?php
	$conn=mysql_connect("localhost","root","");
     $db=mysql_select_db("cuet_library",$conn);
	 
	$ty_del=$_POST['type_del'];
	//echo $id;
	$sql="DELETE FROM type WHERE type_id='$ty_del'";
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