<!Doctype>
<html>
<head>
<title> Author Table Page</title>
<link href="author_table.css" rel="stylesheet" type="text/css" >

<style type="text/css">

body {
    background-image: url("image/lib.gif");
    //background-color: #cccccc;
}

</style>

</head>

<body id="body-color" >

<div id="author_type_book" >

<fieldset>

      <table>
<form method="POST" action="author_table_insert.php">

<tr>
<td>Author Id</td><td><input type="text" name="a_id">  </td>



</tr>

<tr>
<td>Author Name</td><td><input type="text" name="a_name">  </td>

</tr>
<tr>
<td>
<input id="button" type="submit" name="submit" value="Store">
</td>

</tr>
</form>
      </table>

</fieldset>

</div>



<div id="author_type_book2">

<fieldset>

<table>
<form method="POST" action="author_table_update.php">

<tr>
<td>Select Author Name</td>          

     <td>

               <?php
			   
			   $connection=mysql_connect("localhost","root","");
                    $db=mysql_select_db("cuet_library",$connection);
				$sql=mysql_query("Select author_id,author_name From author");
				
				$select='<select name=author_upd>';
				
				while($rs=mysql_fetch_array($sql))
				{
				
				$select.='<option value=" '.$rs['author_id'].'">'.$rs['author_name'].' </option>';
				}
				$select.='</select>';
			   
			   echo $select;
						
			   
			   ?>

            </td>



</tr>

      <tr>
<td>New Author Name</td><td><input type="text" name="a_name"></td>





       </tr>
<tr>
<td>
<input id="button" type="submit" name="submit" value="Update">
</td>

</tr>
</form>
</table>

</fieldset>

</div>



   <div id="author_type_book3">

<fieldset>

<table>
<form method="POST" action="author_table_delete.php">

<tr>
<td>Select Author Name</td>



                <td>
					<?php
						$connection=mysql_connect("localhost","root","");
                        $db=mysql_select_db("cuet_library",$connection);
						
						
						$sql=mysql_query("SELECT author_id,author_name FROM author");
					
						$select= '<select name="author_del">';
						
						 while($rs=mysql_fetch_array($sql)){
							 $select.='<option value="'.$rs['author_id'].'">'.$rs['author_name'].'</option>';
						} 
						$select.='</select>';
						echo $select;
						
						
						
					?>
					
					</td>

</tr>


<tr>
<td>
<input id="button" type="submit" name="submit" value="Delete">
</td>

</tr>
</form>
</table>

</fieldset>

</div>


</body>







</html>