<?php

$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("cuet_library",$connection);

if(!$connection)
{

die('could not connect :'.mysql_error);

}

$bo_id=$_POST['b_id'];
$bo_name=$_POST['b_name'];
$at_id=$_POST['a_id'];
$ty_id=$_POST['t_id'];
$b_stat=$_POST['b_st'];

    $sql="insert into book(book_id,book_name,author_id,type_id,b_status)values('$bo_id','$bo_name','$at_id','$ty_id','$b_stat')";

       $result=mysql_query($sql);
	//echo "1";
	
	
	      if($result==1){
		header('Location: book_table.php');
	         }
	 else
	 {
		echo "not success";
	 }

        mysql_close($connection);






?>