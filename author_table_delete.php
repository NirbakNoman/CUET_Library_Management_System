<?php
	$conn=mysql_connect("localhost","root","");
     $db=mysql_select_db("cuet_library",$conn);
	$at_del=$_POST['author_del'];
	//echo $id;
	$sql="DELETE FROM author WHERE author_id='$at_del'";
	$result=mysql_query($sql);
	//echo "1";
	if($result==1){
		header('Location: author_table.php');
	}
	else{
		echo "not success";
	}
	mysql_close($conn);
?>