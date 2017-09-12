<?php
	$conn=mysql_connect("localhost","root","");
     $db=mysql_select_db("cuet_library",$conn);
	$b_upd=$_POST['book_upd'];
	$book_new_name=$_POST['b_name'];
	//echo $id;
	$sql="Update book set book_name='$book_new_name' WHERE book_id='$b_upd'";
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