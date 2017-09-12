<?php

$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("cuet_library",$connection);

if(!$connection)
{

die('could not connect :'.mysql_error);
}

$at_id=$_POST['a_id'];
$at_name=$_POST['a_name'];

     $sql="insert into author(author_id,author_name)values('$at_id','$at_name')";

    $result=mysql_query($sql);
	//echo "1";
	
	
	if($result==1){
		header('Location: author_table.php');
	}
	else{
		echo "not success";
	}




     mysql_close($connection);

?>