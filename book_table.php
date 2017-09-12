<!Doctype>
<html>
<head>
<title> Book Table Page</title>
<link rel="stylesheet"type="text/css" href="author_table.css">

<style type="text/css">

body {
    background-image: url("image/lib9.jpg");

}

</style>

</head>


<body id="body-color">

<section>
  
<div id="author_type_book">
	<fieldset>
		<table>
			<form method="POST" action="book_table_insert.php">
				<tr>
					<td>Book Id</td><td><input type="text" name="b_id">  </td>
				</tr>
				<tr>
					<td>Book Name</td><td><input type="text" name="b_name">  </td>
				</tr>
				<tr>
					<td>author Id</td><td><input type="text" name="a_id">  </td>
				</tr>
				
				<tr>
					<td>Type Id</td><td><input type="text" name="t_id">  </td>
				</tr>
				
				<tr>
					<td>Status</td><td><input type="text" name="b_st">  </td>
				</tr>
				
				
				<tr>
					<td><input id="button" type="submit" name="submit" value="Store"></td>
				</tr>
				
				
			</form>
		</table>
	</fieldset>
</div>


<div id="author_type_book2">
	<fieldset>
		<table>
			<form method="POST" action="book_table_update.php">
				<tr>
					<td>Select Book Name</td>
					<td>
					<?php
						$connection=mysql_connect("localhost","root","");
                        $db=mysql_select_db("cuet_library",$connection);
						
						
						$sql=mysql_query("SELECT book_id,book_name FROM book");
					
						$select= '<select name="book_upd">';
						while($rs=mysql_fetch_array($sql)){
							$select.='<option value="'.$rs['book_id'].'">'.$rs['book_name'].'</option>';
						}
						$select.='</select>';
						echo $select;
					?>
					</td>
				
					
					
				</tr>
				<tr>
					<td>New Book Name</td><td><input type="text" name="b_name">  </td>
				</tr>
				
				
				<tr>
					<td><input id="button" type="submit" name="submit" value="Update"></td>
				</tr>
			</form>
		</table>
	</fieldset>
</div>


<div id="author_type_book3">
	<fieldset>
		<table>
			<form method="POST" action="book_table_delete.php">
				<tr>
					<td>Select Book Name</td>
					
					<td>
					<?php
						$connection=mysql_connect("localhost","root","");
                        $db=mysql_select_db("cuet_library",$connection);
						
						
						$sql=mysql_query("SELECT book_id,book_name FROM book");
					
						$select= '<select name="book_del">';
						
						 while($rs=mysql_fetch_array($sql)){
							 $select.='<option value="'.$rs['book_id'].'">'.$rs['book_name'].'</option>';
						} 
						$select.='</select>';
						echo $select;
						
						
						
					?>
					
					</td>
					
				</tr>
				
				<tr>
					<td><input id="button" type="submit" name="submit" value="Delete"></td>
				</tr>
			</form>
		</table>
	</fieldset>
</div>


</section>


</body>







</html>