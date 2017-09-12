<html>


<table border='1px solid'>
	<tr>
		<th>Student ID</th> 
		<th>User Name</th>
		<th>Password</th>
		<th>Confirm Password</th>
		<th>Bank Ac</th>
        <th>Status</th>

	</tr>
		<?php
		
		include('connect.php');
		$sql=mysql_query("select * from registration");
			while($rs=mysql_fetch_array($sql)){

					echo '<tr><td>'.$rs['student_id'].'</td><td>'.$rs['user_name'].'</td><td>'.$rs['pass'].'</td> <td> '.$rs['con_pass'].'</td> <td>'.$rs['b_ac'].'</td> <td>'.$rs['status'].'</td> </tr>';
				}
		?>	
</table>
</html>
