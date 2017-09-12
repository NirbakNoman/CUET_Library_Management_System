<?php


	$conn=mysql_connect("localhost","root","");
     $db=mysql_select_db("cuet_library",$conn);
	$at_upd=$_POST['author_upd'];
	
	$author_new_name=$_POST['a_name'];
	//echo $id;
	$sql="Update author set author_name='$author_new_name' WHERE author_id='$at_upd'";
	
	
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