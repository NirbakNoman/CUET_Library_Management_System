<?php

$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("cuet_library",$connection);

if(!$connection)
{

die('could not connect :'.mysql_error);
}

$ty_id=$_POST['t_id'];
$ty_name=$_POST['t_name'];

$sql="insert into type(type_id,type_name)values('$ty_id','$ty_name')";

$result=mysql_query($sql);
	//echo "1";
	
	
	if($result==1){
		header('Location: type_table.php');
	}
	else{
		echo "not success";
	}

mysql_close($connection);

?>




