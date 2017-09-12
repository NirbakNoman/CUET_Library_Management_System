<?php

$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("cuet_library",$connection);

if(!$connection)
{

die('could not connect :'.mysql_error);
}

$st_id=$_POST['s_id'];
$bo_id=$_POST['b_id'];
$is_date=$_POST['i_date'];

     $sql="Insert into book_issue(student_id,book_id,issue_date)values('$st_id','$bo_id','$is_date')";

    $result=mysql_query($sql);
	//echo "1";
	
	
	if($result==1){
		header('Location:issue_book.php');
	}
	else{
		echo "not success";
	}




     mysql_close($connection);

?>