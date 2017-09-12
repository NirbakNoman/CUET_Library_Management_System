<html>


<table border='1px solid'>
	<tr>
		<th>Book ID</th> 
		<th>Book Name</th>
		<th>Author Name</th>
		<th>Book Type</th>
	</tr>

		<?php
		$book_n= $_POST['b_id']; 
		include('connect.php');


		$sql=mysql_query("select b.book_id,b.book_name,b.author_id,c.type_name,a.author_name from author as a,book as b, type as c where 
			a.author_id = b.author_id and b.type_id = c.type_id and b.book_name like '".$book_n."%' " )  ;


			while($rs=mysql_fetch_array($sql)){

					echo '<tr><td>'.$rs['book_id'].'</td><td>'.$rs['book_name'].'</td><td>'.$rs['author_name'].'</td> <td> '.$rs['type_name'].'</td></tr>';
				}
		?>	
</table>



</html>
