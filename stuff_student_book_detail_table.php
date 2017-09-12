<html>


<table border='1px solid'>
	<tr>
		<th>Student ID</th> 
		<th>Department</th>
		<th>Book Id</th>
		<th>Issue Date</th>
	
	</tr>

		<?php
		$st_id= $_POST['s_id']; 
		include('connect.php');


		$sql=mysql_query("select a.student_id,a.department,b.book_id,b.issue_date from registration a left join book_issue b on a.student_id=b.student_id where a.student_id='".$st_id."' " )  ;


			while($rs=mysql_fetch_array($sql)){

					echo '<tr><td>'.$rs['student_id'].'</td><td>'.$rs['department'].'</td><td>'.$rs['book_id'].'</td> <td> '.$rs['issue_date'].'</td></tr>';
				}
		?>	
</table>



</html>
