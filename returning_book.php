<?php  

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("cuet_library",$conn);

if(!conn)
{


die('could not connect :'.mysql_error);

}


$st_id=$_POST['s_id'];
$bo_id=$_POST['b_id'];
$re_date=$_POST['r_date'];

     $sql="Insert into book_return(student_id,book_id,return_date)values('$st_id','$bo_id','$re_date')";

    $result=mysql_query($sql);
	
	
	
	if($result==1){
		header('Location:stuff_book_return.php');
	}
	else{
		echo "not success";
	}




     mysql_close($conn);

















?>