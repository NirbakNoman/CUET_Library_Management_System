<?php
	$conn=mysql_connect("localhost","root","");
     $db=mysql_select_db("cuet_library",$conn);
	$b_del=$_POST['book_del'];
	//echo $id;
	$sql="DELETE FROM book WHERE book_id='$b_del'";
	$result=mysql_query($sql);
	//echo "1";
	if($result==1){
		header('Location: book_table.php');
	}
	else{
		echo "not success";
	}
	mysql_close($conn);
?>