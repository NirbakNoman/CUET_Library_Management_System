<!Doctype>
<html>
<head>
<title> Student Admin Page</title>
<link rel="stylesheet"type="text/css" href="student_admin_page.css">

<style type="text/css">

body {
    background-image: url("image/lib5.jpg");
    
}

</style>


</head>


<body id="body-color">

<section>
  
<div id="st_admin">
	<fieldset>
		<table>
			<form method="POST" action="student_admin_page_update.php">
				<tr>
					<td>Student Id</td><td><input type="text" name="s_id">  </td>
				</tr>
				
				<tr>
					<td>Update Status</td><td><input type="text" name="u_status">  </td>
				</tr>
				
				
				<tr>
					<td><input id="button" type="submit" name="submit" value="Store"></td>
				</tr>
				
				
			</form>
			<tr>
					<td><a href="student_database_table.php"><input id="button1" type="submit" name="submit" value="View Database Table"></a>  </td>
				</tr>
			
		</table>
		
		
	</fieldset>
</div>
</html>