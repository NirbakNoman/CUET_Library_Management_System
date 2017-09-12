<html>


<table border='1px solid'>
	<tr>
		<th>Student ID</th> 
		<th>User Name</th>
		<th>Department </th>
		<th>Bank Reciept No</th>
		<th>Student Status</th>
	</tr>

		<?php
		$st_id= $_POST['s_id']; 
		include('connect.php');


		$sql=mysql_query("select student_id,user_name,department,b_ac,status from registration where student_id='".$st_id."' " )  ;


			while($rs=mysql_fetch_array($sql)){

					echo '<tr><td>'.$rs['student_id'].'</td><td>'.$rs['user_name'].'</td><td>'.$rs['department'].'</td> <td> '.$rs['b_ac'].'</td> <td>'.$rs['status'].'</td></tr>';
				}
		?>	
</table>



</html>
